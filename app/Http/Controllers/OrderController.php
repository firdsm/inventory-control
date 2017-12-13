<?php

namespace inventory\Http\Controllers;

use inventory\Order;
use inventory\Http\Requests\OrderRequest;

class OrderController extends Controller {
    
    public function index()
    {
        $orders = Order::get();

    	return view('orders.index', compact('orders'));
    }

    public function create()
    {
    	$products = \inventory\Product::get();
    	$customers = \inventory\Customer::get();

    	return view('orders.create', compact('products', 'customers'));
    }

    public function store(OrderRequest $request)
    {   
        $order = new Order;

        $order->addOrder($request->only([
            'product_id',
            'quantity',
            'order_date',
            'customer_id'
        ]));

        session()->flash('message', 'Order data added successfully');

    	return redirect('order');
    }

    public function edit(Order $order)
    {
        $products = \inventory\Product::get();
        $customers = \inventory\Customer::get();

        return view('orders.edit', compact('order', 'products', 'customers'));
    }

    public function update(OrderRequest $request, Order $order)
    {
        $order->update($request->only([
            'product_id',
            'quantity',
            'order_date',
            'customer_id'
        ]));

        session()->flash('message', 'Order data successfully updated');

        return redirect('order');
    }

    public function destroy(Order $order)
    {
        $order->delete();

        session()->flash('message', 'Order data successfully deleted');

        return redirect('order');
    }
}
