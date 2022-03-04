<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Membros;

class MembrosController extends Controller
{
    public function index(Request $request){
        $pesquisa = $request->pesquisa;
        if($pesquisa != ''){
            $dados = Membros::Where('nome', 'like', "%".$pesquisa."%")->paginate(1000);
        }else{
            $dados = Membros::paginate(10);
        } 
       
        
        return view('membro.index', compact('dados'));
    }

    public function create(){
        $nome = "daniel";
        return view('membro.form', ["nome" => $nome]);

    }
    
    public function update($id){
        $membro = Membros::find($id);
       return view('membro.form', compact('membro'));
    }

    public function store(Request $request){

        if($request->id != ''){
            $membro = Membros::find($request->id);
            $membro->update($request->all());
        }else{
            $membro = Membros::create($request->all());
        }
       
        return redirect('/membro/editar/'. $membro->id);
    }

    public function delete($id){
        $membro = Membros::find($id);
        if(!empty($membro)){
            $membro->delete();
            return redirect('membro')->with('success', 'Deletado com sucesso!');
        } else {
            return redirect('membro')->with('danger', 'Registro não encontrado!');
        }
    }
}
