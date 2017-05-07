<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrderRequest;
use App\Menu;
use App\Order;
use App\Order_Item;
use App\Photo;
use App\Restaurant;
use Illuminate\Http\Request;
use Illuminate\Queue\ManuallyFailedException;
use Symfony\Component\HttpFoundation\Session\Session;

class FrontController extends Controller
{
    public function index()
    {
        return view('front.index');
    }

    public function byRestaurant($id)
    {
        $photos = Photo::all();
        $menus = Menu::where('restaurant_id', $id)->with('photo')->get();


        return view('front.show_menu', compact('menus', 'photos'));
    }

    public function order (Menu $menu)
    {

//        echo $menu->restaurant->;

        return view('front.order', compact('menu') );
    }

    public function store (OrderRequest $request, Menu $menu)
    {
        //Order::create($request->all());

        $order = new Order();

        $order->restaurant_id = $menu->restaurant->id;
        $order->total_order_price = $menu->price;
        $order->status_order = 'new';
        $order->costumer_id = 1;
        $order->customer_comments = $request->input('customer_comments');
        $order->name = $request->input('name');
        $order->address = $request->input('address');
        $order->phone = $request->input('phone');
        $order->save();

        $order_item = new Order_Item();
        $order_item->order_id = $order->id;
        $order_item->menu_id = $menu->id;
        $order_item->save();

        return redirect(route('front.index'));
    }

    public function addToStore(Menu $menu)
    {
        $basket = session('basket');

        if($basket) {
            $basket[] = [
                'id' => $menu->id
            ];

            session(['basket' => $basket]);
        } else {
            $basketItem[] = [
                'id' => $menu->id
            ];

            session(['basket' => $basketItem]);
        }


//       dd($basket);

        return back();


    }


    public function RemoveFromBasket(Menu $menu)
    {
        $basket = session('basket');

        $items = [];

        foreach ($basket as $value){
            if($menu->id != $value['id']) {
                $items[] = ['id' => $value['id']];
            }
        }

        session(['basket' => $items]);

        return back();

    }

    public function basket()
    {
        $basket = session('basket');

//        dd($temp);
        $items = [];

        foreach ($basket as $value){
            $items[] = Menu::find($value['id']);
        }

        return view('front.basket',compact('items'));

    }

}
