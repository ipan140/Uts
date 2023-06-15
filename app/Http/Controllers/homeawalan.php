<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeawalan extends Controller
{
    function index()
    {
        $halamanPage = 'Home';
        return view('home', ['halamanPage' => $halamanPage]);
    }

}
