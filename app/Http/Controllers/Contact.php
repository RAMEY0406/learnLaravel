<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Contact extends Controller
{
    public function index(Request $r)
    {
        $data['company'] = 'Cambodia store';
        return view('contact', $data);
    }
}
