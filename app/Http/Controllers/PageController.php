<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Item;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $items = Item::where('prepared',1)->with('category')->take(10)->get();
        //$categories = Category::whereIn('id',$items->category_id->get()->toArray())->get();

        return view('index')->with(compact('items'));
    }

    public function about(){
        return view('aboutUs');
    }

    public function  contact(){
        return view('contactUs');
    }

    public function menu()
    {
        $categories = Category::get();
        $items = Item::with('category')->get();
        return view('menu')
            ->with(compact('categories'))
            ->with(compact('items'));
    }

    public function reservation()
    {
        return view('reservation');
    }

    public function loginRegister()
    {
        return view('login_register');
    }
}
