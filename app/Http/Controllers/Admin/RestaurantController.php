<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RestaurantController extends Controller
{
    public function index()
    {
        return '<h1>Página inicial<h1>';
    }

    public function new()
    {
        return view('admin.restaurants.store');
    }

    public function store(Request $req)
    {

        dd($req->all());
    }
}
