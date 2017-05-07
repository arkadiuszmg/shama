<?php

namespace App\Widgets;

use App\Restaurant;
use Arrilot\Widgets\AbstractWidget;

class RestaurantsWidget extends AbstractWidget
{
    /**
     * The configuration array.
     *
     * @var array
     */
    protected $config = [];

    /**
     * Treat this method as a controller action.
     * Return view() or other content to display.
     */
    public function run()
    {
        $restaurants = Restaurant::all();

        return view("widgets.restaurants_widget", [
            'config' => $this->config,
            'restaurants' => $restaurants
        ]);
    }
}