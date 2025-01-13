<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewTheme extends Controller
{
    public function index1()
    {
        dd('hee');
        return view('front/new-theme/index');
    }
}
