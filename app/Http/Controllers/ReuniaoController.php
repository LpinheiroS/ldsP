<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reuniao;

class ReuniaoController extends Controller
{
    //
    public function create(){
        return view('reuniao.reuniao');
    }

    public function store(Request $request){


        Reuniao::create([
            'nome' => $request->nome,
            'data' => $request->data,
            'descricao' => $request->descricao
        ]);

        return view('reuniao.reuniao');
    }

    public function index(){
        //Mostra uma lista de reuniões
        $reuniao = Reuniao::all();
        return view('index', compact('reuniao'));
    }
}
