<?php

namespace App\Http\Controllers;

use App\City;
use App\Http\Requests\RestaurantRequest;
use App\Restaurant;
use Illuminate\Http\Request;

class RestaurantsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $restaurants = Restaurant::orderBy('id', 'DESC')->paginate(10);

        return view ('restaurants.index', [
            'restaurants'=> $restaurants
        ]);
    }

    public function create ()
    {
        $cities = City::all()->pluck('name', 'id');
        return view('restaurants.create', compact('restaurants', 'cities' ));
    }

    public function store (RestaurantRequest $request)
    {
//        Restaurant::create($request->all());

        $restaurant = new Restaurant();
        $restaurant->name = $request->input('name');
        $restaurant->address = $request->input('address');
        $restaurant->phone = str_slug($request->input('phone'), '');
        $restaurant->city_id = $request->input('city_id');
        $restaurant->open = $request->input('open');
        $restaurant->save();

        return redirect(route('restaurants.index'));
    }

    public function edit(Restaurant $restaurant)
    {
        $cities = City::all()->pluck('name', 'id');
        return view('restaurants.edit', compact('restaurant', 'cities'));
    }

    public function update(RestaurantRequest $request, Restaurant $restaurant)
    {
        $restaurant->update($request->all());
        return redirect(route('restaurants.index'));
    }

    public function destroy(Restaurant $restaurant)
    {
        //dd($category);
        $restaurant->delete();
        return redirect('restaurants');
    }
}
