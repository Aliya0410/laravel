<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;

class AdminController extends Controller
{
    public function dashboard()
    {
        $orders = Order::all();
        return view('admin', compact('orders'));
    }

    public function approveOrder(Request $request, $id)
    {
        $order = Order::findOrFail($id);
        if ($order->product->amount >= $order->quantity) {
            $order->status = 'approved';
            $order->save();
            return redirect()->back()->with('success', 'Заказ одобрен!');
        } else {
            return redirect()->back()->with('error', 'Недостаточно товара на складе!');
        }
    }

    public function deliverOrder(Request $request, $id)
    {
        $order = Order::findOrFail($id);
        $order->status = 'delivered';
        $order->save();
        return redirect()->back()->with('success', 'Заказ отправлен!');
    }
}
