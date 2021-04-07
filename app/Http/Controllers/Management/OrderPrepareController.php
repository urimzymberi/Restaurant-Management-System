<?php

namespace App\Http\Controllers\Management;

use App\Http\Controllers\Controller;
use App\Models\ItemOrder;
use App\Models\Order;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class OrderPrepareController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
        $orders = ItemOrder::orderBy('created_at', 'desc')->whereNull('end_time')->with('order', 'item');
        //dd($order)
        return DataTables::of($orders)
            ->addColumn('order_id', function ($order) {
                return $order->order_id;
            })
            ->addColumn('item', function ($order) {
//               foreach ($order->item as $item){
//               return $item->name;
//                }
               return $order->item->name;
            })
            ->addColumn('quantity', function ($order) {
//                foreach ($order->items as $item){
//                    return $item->quantity;
//                }
               return $order->quantity;
            })
            ->addColumn('start', function ($order) {
                if($order->start_time && !$order->end_time) {
                    return '<button class="btn btn-info edit-button" data-pk="' . $order->id . '" data-name="finish"> Finish</button>';
                }
                elseif($order->end_time) {
                    return '<button  class="btn btn-success edit-button" data-pk="' . $order->id . '" data-name="finished" >' . $order->end_time . '</button>';

                }
                else {
                    return '<button class="btn btn-primary edit-button" data-pk="' . $order->id . '" data-name="start"> Start</button>';
                }
            })
            ->rawColumns(['start'])
           ->make(true);
    }
//        $users = User::role('Employee')->get();
        return view('management.chief.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
    public function update(Request $request, $itemOrder)
    {
        $order= ItemOrder::find($itemOrder);
        if($request->ajax())
        {
            if ($request->name== 'start')
            {
                $order->start_time = Carbon::now()->format('h:i:s');
                $order->save();
                return response()->json(['success'=>true]);
            }
            elseif($request->name=='finish')
            {
                $order->end_time = Carbon::now()->format('h:i:s');
                $order->save();
                return response()->json(['success'=>true]);
            }
            else{
                return response()->json([], 400);
            }
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
