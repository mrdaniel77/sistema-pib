<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Membros;

class MembrosController extends Controller
{
    public function index(){
        return view('membro.index');
    }

    public function create(){
        $nome = "daniel";
        return view('membro.form', ["nome" => $nome]);

    }
    
    public function editar(){
        return view();
    }

    public function store( Request $request){

        if($request->id =! ''){
            $membro = Membros::find($request->id);
            $membro->update($request->all());
            
        }else{
            $membro = Membros::create($request->all());
        }
        return redirect('/');
    }

    public function trash(){
        return view();
    }
}
