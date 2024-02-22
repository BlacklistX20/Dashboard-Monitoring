<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        return view('pages/home');
    }

    public function temp() {
        $sensor1Model = new \App\Models\Sensor1Model();
        $sensor1 = $sensor1Model->findAll();



        return view('pages/temp');
    }

    public function electric() {
        return view('pages/electric');
    }

    public function fuel() {
        return view('pages/fuel');
    }
}
