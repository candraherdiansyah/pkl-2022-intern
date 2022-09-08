<?php

namespace App\Http\Controllers;

class MyController extends Controller
{
    public function about()
    {
        return "ini halaman about";
    }

    public function profile()
    {
        return view('profile');
    }
}
