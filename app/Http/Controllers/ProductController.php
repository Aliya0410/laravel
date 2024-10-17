<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

use App\Models\Order;


class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('products', ['products' => $products]);
    }

    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('product', ['product' => $product]);
    }

    public function order(Request $request, $id)
    {
        $request->validate([
            'quantity' => 'required|integer|min:1',
        ]);

        $product = Product::findOrFail($id);
        $total_amount = $product->cost * $request->quantity;
        $order = new Order();
        $order->product_id = $product->id;
        $order->quantity = $request->quantity;
        $order->total_amount = $total_amount;
        $order->save();

        return redirect('/products')->with('success', 'Заказ оформлен успешно!');
    }
}
