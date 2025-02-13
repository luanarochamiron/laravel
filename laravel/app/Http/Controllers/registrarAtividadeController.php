<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Agenda;
class registrarAtividadeController extends Controller
{
    public function index(){
        $dados = Agenda::all();
        return view('paginas.Cadastrar')->With('dados',$dados);
    } //retornar dados

    public function store(Request $request){
        $data = $request->input('dataEvento');
        $descricao = $request->input('descricaoEvento');
// inserindo os dados na tabela
        $model = new Agenda();
        $model->dataEvento = $data;
        $model->descricao = $descricao;

        $model->save();//armanezar no banco
        return redirect('/cadastrar');
    }// fim do metodo de cadastro

    public function consultar()
    {
        $ids = Agenda::all();
        return view('paginas.consultar',compact('ids'));
    }//fim do metodo 

    public function editar($id)// traz só o reusultado id
    {
        $dado = Agenda::findOrFail($id);// guarda só o reusultado id
        return view('paginas.editar',compact('dado'));
    }//fim do metodo editar

    public function atualizar(Request $request, $id)
    {
        Agenda::where('id',$id)->update($request->all());
        return redirect('/consultar');
    }

    public function excluir(Request $request, $id)
    {
        Agenda::where('id',$id)->delete($request->all());
        return redirect('/consultar');
    }
}// todas as operações do banco de dados
