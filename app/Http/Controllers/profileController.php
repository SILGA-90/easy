<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class profileController extends Controller
{
    //

    public function index() {
        $name = 'Souleymane';
        return view('profile', ['name'=> $name]);
    }
}
