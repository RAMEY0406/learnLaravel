<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterContriller extends Controller
{
    public function save(Request $r)
    {
        $name = $r->name;
        $email = $r->email;
        $phone = $r->phone;

        echo $name .'</br>'. $email .'</br>'. $phone ;
    }
}
