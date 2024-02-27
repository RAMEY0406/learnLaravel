<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function index()
    {
        return view('upload');
    }
    public function save(Request $r)
    {
        if($r->photo){
            $file = $r->file('photo')->store('upload', 'public');
            return redirect('upload')->with('success','File has been uploaded!');
        }       
        else{
            return redirect('upload')->with('error','Please select your file!');
        }
    }
}