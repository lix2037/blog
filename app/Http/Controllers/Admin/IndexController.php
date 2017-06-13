<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

class IndexController extends CommonController
{
    //
    public function index()
    {
        dd(session('admin'));
        return 111;
    }
}
