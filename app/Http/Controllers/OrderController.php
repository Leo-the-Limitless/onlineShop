<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    public function order($id) 
    {
        $validator = validator(request()->all(), [
            'customerName' => 'required'
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator);
        }

        $order = new Order;
        $order->customerName = request()->customerName;
        $order->product_id = $id;
        $order->save();
        return redirect ('/products')->with('info', 'Successfully placed an order');
    }

    public function orderList()
    {
        $data = Order::all();

        return view('orders.orderList', 
    [
        'orders' => $data
    ]);
    }

    public function cancel($id)
    {
        $order = Order::find($id);
        $order->delete();

        return back()->with('info', 'Order Canceled');
    }
}