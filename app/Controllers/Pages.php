<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'tittle' => 'Home'
        ];
        return view('home', $data);
    }
    public function about()
    {
        $data = [
            'tittle' => 'About'
        ];
        return view('about', $data);
    }
}
