<?php

namespace App\Http\Controllers\web;
use App\Http\Controllers\Controller;

use App\Models\RtoOffice;


class SettingController extends Controller
{
    public function view()
    {
        $rtoOffices = RtoOffice::all();
        return view('web.setting.index', compact('rtoOffices'));
    }

}
