<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Contact extends Controller
{
    public function index(Request $r)
    {
        $name = 'sambath theara';
        $data =['name'=>$name,'company'=>'Cambodia store'];
        // $data['company'] = 'Cambodia store';
        return view('contact', $data);
    }
}
