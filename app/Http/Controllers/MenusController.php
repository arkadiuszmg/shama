<?php

namespace App\Http\Controllers;

use App\Http\Requests\MenuRequest;
use App\Menu;
use App\Photo;
use App\Restaurant;
use Illuminate\Http\Request;

class MenusController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $menus = Menu::orderBy('id', 'DESC')->paginate(10);

        return view ('menus.index', [
            'menus'=> $menus
        ]);
    }

    public function create ()
    {
        $photos = Photo::all()->pluck('name', 'id');
        $restaurants = Restaurant::all()->pluck('name', 'id');
        return view('menus.create', compact('menus', 'photos', 'restaurants'));
    }

    public function store (MenuRequest $request)
    {
        Menu::create($request->all());
        return redirect(route('menus.index'));
    }

    public function edit(Menu $menu)
    {
        $photos = Photo::all()->pluck('name', 'id');
        $restaurants = Restaurant::all()->pluck('name', 'id');
        return view('menus.edit', compact('menu', 'photos', 'restaurants'));
    }

    public function update(MenuRequest $request, Menu $menu)
    {
        $menu->update($request->all());
        return redirect(route('menus.index'));
    }

    public function destroy(Menu $menu)
    {
        //dd($category);
        $menu->delete();
        return redirect('menus');
    }

}
