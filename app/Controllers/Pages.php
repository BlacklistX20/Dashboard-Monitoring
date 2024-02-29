<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        return view('pages/home');
    }

    public function temp() {
        return view('pages/temp');
    }

    public function electric() {
        return view('pages/electric');
    }

    public function fuel() {
        return view('pages/fuel');
    }

}
