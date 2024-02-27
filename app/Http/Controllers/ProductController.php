<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $data['total'] = "";
        return view('sell',$data);
    }
    public function sell(Request $r)
    {
        $qty = $r->qty;
        $p = $r->price;
        $name = $r->pname;
        $dis = $r->dis;
        $total = $qty * $p *(1-$dis/100);
        $data['total'] = $total;
        return view('sell', $data);
    }
}
