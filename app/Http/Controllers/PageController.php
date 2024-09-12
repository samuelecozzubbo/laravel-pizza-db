<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pizza;

class PageController extends Controller
{
    //Il metodo index è il metodo che si una per la home
    public function index()
    {
        return view('home');
    }

    public function about()
    {
        return view('about');
    }

    public function contacts()
    {
        return view('contacts');
    }
    public function myPizzas()
    {
        $pizzas = Pizza::all();
        //dd($pizzas);
        return view('myPizzas', compact('pizzas'));
    }
}
