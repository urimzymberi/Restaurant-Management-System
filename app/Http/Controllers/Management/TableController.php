<?php

namespace App\Http\Controllers\Management;

use App\Http\Controllers\Controller;
use App\Models\Bill;
use App\Models\Category;
use App\Models\Item;
use App\Models\ItemOrder;
use App\Models\Order;
use App\Models\Reservation;
use App\Models\Table;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use PhpParser\Node\Stmt\DeclareDeclare;

class TableController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tables = collect(DB::select(
            "SELECT tables.id as 't_id' , tables.table_no, orders.id as 'o_id', orders.waiter_id, bills.amount
                    FROM tables
                    LEFT JOIN orders  ON tables.id = orders.table_id
                    LEFT JOIN bills ON orders.id = bills.order_id

                    WHERE orders.id = (SELECT MAX(orders.id)
                                        FROM orders
                                        WHERE orders.table_id = tables.id
                                        GROUP BY tables.id)
                       OR orders.table_id  IS NULL
                        ORDER BY tables.table_no"));

        $date1 = Carbon::now()->addHours(1);
        $date2 = Carbon::now()->addHours(2);

        $reservations = Reservation::where([
            ['date_time', '>=', $date1],
            ['date_time', '<', $date2]])->get();

        return view('management.waiter.index')
            ->with(compact('tables'))
            ->with(compact('reservations'));
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
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function addItem(Request $request)
    {
        $order_id = $request->input('order_id');
        $item_id = $request->input('item_id');
        $table_id = $request->input('table_id');
        $quantity = 1;

        if ($order_id == 0) {
            $order = new Order();
            $order->waiter_id = Auth::user()->id;
            $order->chef_id = 0;
            $order->table_id = $table_id;
            $order->save();
            $order_id = $order->id;
        }

        $item_order = ItemOrder::where([['order_id', '=', $order_id], ['item_id', '=', $item_id]])->get();

        if ($item_order->count() != 0) {
            $item_order = ItemOrder::find($item_order[0]->id);
            $item_order->quantity = $item_order->quantity + $quantity;
        } else {
            $item_order = new ItemOrder();
            $item_order->order_id = $order_id;
            $item_order->item_id = $item_id;
            $item_order->quantity = $quantity;
        }

        $item_order->save();

        $item = Item::find($item_order->item_id);
        if ($item->prepared == 0){
            $item->stock = $item->stock - 1;
            $item->save();
        }

        $item_orders = ItemOrder::where('order_id', $order_id)->with('item')->get();
        $data[] = $item_orders;
        $data[] = $order_id;

        return response()->json($data);
    }

    public function itemQuantity(Request $request)
    {
        $order_id = $request->input('order_id');
        $item_order_id = $request->input('item_order_id');
        $quantity = $request->input('quantity');
        $quantity1 = 0;

        $item_order = ItemOrder::find($item_order_id);

        if ($item_order->count() != null) {
            $quantity1 = $item_order->quantity;
            $item_order->quantity = intval($quantity);
        }
        $item_order->save();

        $item = Item::find($item_order->item_id);
        if ($item->prepared == 0){
            $item->stock = $item->stock - (intval($quantity) - intval($quantity1));
            $item->save();
        }

        $item_orders = ItemOrder::where('order_id', $order_id)->with('item')->get();

        $data[] = $item_orders;
        $data[] = $order_id;

        return response()->json($data);
    }

    public function itemRemove(Request $request)
    {
        $order_id = $request->input('order_id');
        $item_order_id = $request->input('item_order_id');
        $item_order = ItemOrder::find($item_order_id);


        $item = Item::find($item_order->item_id);
        if ($item->prepared == 0){
            $item->stock = $item->stock + $item_order->quantity;
            $item->save();
        }

        $item_order->delete();


        $item_orders = ItemOrder::where('order_id', $order_id)->with('item')->get();

        $data[] = $item_orders;
        $data[] = $order_id;

        return response()->json($data);
    }

    public function tableDetails(Request $request)
    {
        $t_id_o_id = $request->input('table');
        $table_id = substr($t_id_o_id, 2, strpos($t_id_o_id, 'o_') - 2);
        $order_id = substr($t_id_o_id, strpos($t_id_o_id, 'o_') + 2);

        $categories = Category::get();
        $items = Item::get();
        $table = Table::findOrFail($table_id);

        if ($order_id != 0) {
            $item_orders = ItemOrder::where('order_id', $order_id)->with('item')->get();
        } else {
            $item_orders = null;
        }

        return view('management.waiter.tableDetails')
            ->with(compact('categories'))
            ->with(compact('items'))
            ->with(compact('item_orders'))
            ->with(compact('order_id'))
            ->with(compact('table'));
    }

    public function itemOrders(Request $request)
    {
        $order_id = $request->input('order_id');

        if ($order_id != 0) {
            $item_orders = ItemOrder::where('order_id', $order_id)->with('item')->get();
        } else {
            $item_orders = null;
        }

        return response()->json($item_orders);
    }

    public function billSave(Request $request)
    {

        $order_id = $request->input('order_id');
        $item_orders = ItemOrder:: where('order_id', $order_id)->with('item')->get();

        if ($order_id != 0 && $item_orders->count()>0) {
            $total = 0;

            $queryBuilder = ItemOrder::select(['quantity', 'id', 'item_id'])->where('order_id', $order_id);
            //dd($item_orders);

            foreach ($item_orders as $item_order) {
                $total = $total + $item_order->item->price * $item_order->quantity;
            }

            $bill = new Bill();
            $bill->order_id = $order_id;
            $bill->amount = $total;
            $bill->payment_type = 1;
            $bill->save();

            return redirect()->route('tables');
        } else {
            session_start();
            $error_script = '<script> window.onload = function(){alert("Duhet patjeter te zgjegji nje ose me shume artikuj per te shtypur fature!")}</script>';
            $_SESSION["error_script"] = $error_script;

            return redirect()->route('tables');
        }
    }

    public function deleteOrder(Request $request)
    {
        $order_id = $request->input('order_id');
        $order = Order::find($order_id);
        if ($order_id > 0 && $order->waiter_id == Auth::user()->id){
            ItemOrder::where('order_id', $order_id)->delete();
            Order::find($order_id)->delete();
        }
        return redirect()->route('tables');
    }
}
