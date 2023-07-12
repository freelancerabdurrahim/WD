<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    function Page(){
        return view('pages.Home');
    }
}
