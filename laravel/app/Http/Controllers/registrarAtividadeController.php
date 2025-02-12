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
}// todas as operações do banco de dados
