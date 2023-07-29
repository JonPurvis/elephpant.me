<?php

namespace App\Http\Controllers;

use App\Elephpant;

class HomeController extends Controller
{
    public function index()
    {
        $elephpants = Elephpant::query()->withoutGlobalScope('nonPrototype')->orderBy('year', 'desc')->orderBy('id', 'desc')->get();

        return view('home', compact('elephpants'));
    }
}
