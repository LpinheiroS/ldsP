<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReuniaoController extends Controller
{
    //
    public function create(){
        return view('reuniao.reuniao');
    }
}
