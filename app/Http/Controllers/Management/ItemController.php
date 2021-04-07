<?php

namespace App\Http\Controllers\Management;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Ingredient;
use App\Models\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items= Item::all();
        return view('management.admin.items.index', compact('items'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $igredients = Ingredient::all();
        $categories = Category::all();
        return view('management.admin.items.create', compact('igredients','categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|min:2|string',
        ]);
        DB::beginTransaction();
        $item = new Item();
        $item->name = $request->input('name');
        if ($request->hasFile('image')) {
            #$file= $request->image->getClientOriginalName();
            $fileName = Str::uuid();
            $item->image = $request->image->storeAs('items', $fileName, 'public');
        }
        $item->price = $request->input('price');
        $item->stock = $request->input('stock');
        $item->category_id= $request->input('category');
       // $item->ingredients->ingredient_id = $request->input('ingredients');
        $item->save();
        DB::commit();
        return redirect()->route('item.show', compact('item'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Item $item)
    {
        $categories = Category::all();
        return view('management.admin.items.show',compact('item','categories'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Item $item)
    {
        $item->name = $request->input('name');
        $item->price = $request->input('price');
        $item->stock = $request->input('stock');
        $item->prepared = $request->input('prepared');
        $item->category_id = $request->input('category');
        $item->update();
        return redirect()->back()->with('status', 'Ndryshimet u ruajten me sukses');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Item $item)
    {
        $item->delete();
    }
}
