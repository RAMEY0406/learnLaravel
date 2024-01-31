<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterContriller extends Controller
{
    public function save(Request $r)
    {
        dd($r->all());
    }
}
