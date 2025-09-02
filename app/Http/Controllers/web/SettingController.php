<?php

namespace App\Http\Controllers\web;
use App\Http\Controllers\Controller;

class SettingController extends Controller
{
    public function view(){
        return view('web.setting.index');
    }
}
