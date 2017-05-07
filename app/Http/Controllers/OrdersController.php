<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Http\Requests\OrderRequest;
use App\Order;
use App\Restaurant;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $orders = Order::orderBy('id', 'DESC')->paginate(10);

        return view ('orders.index', [
            'orders'=> $orders
        ]);
    }

    public function create ()
    {
        $customers = Customer::all()->pluck('name', 'id');
        $restaurants = Restaurant::all()->pluck('name', 'id');
        return view('orders.create', compact('orders', 'customers', 'restaurants'));
    }

    public function store (OrderRequest $request)
    {
        Order::create($request->all());
        return redirect(route('orders.index'));
    }

    public function edit(Order $order)
    {
        $customers = Customer::all()->pluck('name', 'id');
        $restaurants = Restaurant::all()->pluck('name', 'id');
        return view('orders.edit', compact('order', 'customers', 'restaurants'));
    }

    public function update(Order $request, Order $order)
    {
        $order->update($request->all());
        return redirect(route('orders.index'));
    }

    public function destroy(Order $order)
    {
        //dd($category);
        $order->delete();
        return redirect('orders');
    }

}
