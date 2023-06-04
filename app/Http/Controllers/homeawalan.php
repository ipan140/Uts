<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeawalan extends Controller
{
    function index()
    {
        $pageTitle = 'Home';
        return view('home', ['pageTitle' => $pageTitle]);
    }

}
