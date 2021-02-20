<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\RestaurantRequest;
use Illuminate\Http\Request;
use App\Models\Restaurant;

class RestaurantController extends Controller
{
    public function index()
    {
        $restaurants = Restaurant::all();
        return view('admin.restaurants.index', compact('restaurants'));
    }

    public function new()
    {
        return view('admin.restaurants.store');
    }

    public function store(RestaurantRequest $req)
    {
        $restaurantData = $req->all();

        $restaurant = new Restaurant();
        $restaurant::create($restaurantData);
        print('Cadastrado com sucesso!');
    }

    public function edit(Restaurant $restaurant)
    {
        return view('admin.restaurants.edit', compact('restaurant'));
    }

    public function update(Request $request, $id)
    {
        $restaurantData = $request->all();
        $restaurant = Restaurant::findOrFail($id);
        $restaurant->update($restaurantData);

        print('restaurante modificado com sucesso !');
    }

    public function delete($id)
    {
        $restaurant = Restaurant::findOrFail($id);
        $restaurant->delete();

        print('restaurante deletado com sucesso !');
    }
}
