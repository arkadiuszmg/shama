<?php

namespace App\Http\Controllers;

use App\Http\Requests\Order_ItemRequest;
use App\Menu;
use App\Order;
use App\Order_Item;
use Illuminate\Http\Request;

class Order_ItemsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $order_items = Order_Item::orderBy('id', 'DESC')->paginate(10);

        return view ('order_items.index', [
            'order_items'=> $order_items
        ]);
    }

    public function create ()
    {
        $orders = Order::all()->pluck('id', 'id');
        $menus = Menu::all()->pluck('name', 'id');
        return view('order_items.create', compact('order_items', 'orders', 'menus'));
    }

    public function store (Order_ItemRequest $request)
    {
        Order_Item::create($request->all());
        return redirect(route('order_items.index'));
    }

    public function edit(Order_Item $order_item)
    {
        $orders = Order::all()->pluck('id', 'id');
        $menus = Menu::all()->pluck('name', 'id');
        return view('order_items.edit', compact('order_item', 'orders', 'menus'));
    }

    public function update(Order_ItemRequest $request, Order_Item $order_item)
    {
        $order_item->update($request->all());
        return redirect(route('order_items.index'));
    }

    public function destroy(Order_Item $order_item)
    {
        //dd($category);
        $order_item->delete();
        return redirect('order_items');
    }

}
