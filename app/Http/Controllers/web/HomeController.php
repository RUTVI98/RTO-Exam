<?php

namespace App\Http\Controllers\web;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function view(){
        return view('web.home.index');
    }
}
