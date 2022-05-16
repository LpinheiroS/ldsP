<?php
use Illuminate\Support\Facades\Storage;

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

      //  dd($request->file('arquivo')->isValid());
        //dd($request->arquivo->extension());


        Reuniao::create([
            'nome' => $request->nome,
            'data' => $request->data,
            'descricao' => $request->descricao
        ]);

        if($request->hasFile('arquivo')){
            if($request->file('arquivo')->isValid()){
                $upload = $request->arquivo->store('arq');

           // echo asset()   ; 
            
            return Storage::download('arquivo');

            }
        }

        return view('reuniao.reuniao');
    }

    public function index(){
        //Mostra uma lista de reuniões
        $reuniao = Reuniao::all();
        return view('index', compact('reuniao'));
    }
}
