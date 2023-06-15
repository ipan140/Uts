<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Profileuser extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $halamanPage = 'Profile';
        return view('profile', ['halamanPage' => $halamanPage]);
    }

}
