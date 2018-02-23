<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use App\Aluno;
use Request;

class AlunosController extends Controller
{

	// Jogar para a pasta aluno, e modificar o caminho
	public function index()
    {
        return view('listagemAluno')->with('alunos', Aluno::all());
    }

    public function mostra(){

    	$idAluno = Input::get('id');
    	$aluno = Aluno::where('id_aluno', '=', $idAluno)->get();

    	return view('mostraaluno')->with('aluno', $aluno);
    }

    public function delete(){

    	$idAluno = Request::route('id');
    	$aluno = Aluno::where('id_aluno', '=', $idAluno)->delete();

    	return view('listagemAluno')->with('alunos', Aluno::all());
    }

    public function salvar()
    {
    	$idAluno = Request::route('id');
    	$aluno = Aluno::findOrFail($idAluno);


    	$aluno->nome_aluno = Request::input('nome_aluno');
    	$aluno->email_aluno = Request::input('email_aluno');
    	$aluno->idade_aluno = Request::input('idade_aluno');
    	$aluno->endereco_aluno = Request::input('endereco_aluno');
    	$aluno->save();

    	return redirect('/alunos')->with('message', 'Aluno alterado com sucesso!');
   
    }

    public function alterar(){

    	$idAluno = Request::route('id');
    	$aluno = Aluno::where('id_aluno', '=', $idAluno)->get();

    	return view('alteraraluno')->with('aluno', $aluno);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('aluno.create')->with('tipos', TipoAluno::all());
    }



    // Retorna a view (formulário) para inserção de dados de um novo aluno
    public function novo()
    {
    	return view('aluno.criar');
    }


    // Insere um novo aluno
    public function adiciona()
    {
    	$nome_aluno = Request::input('nome_aluno');
    	$email_aluno = Request::input('email_aluno');
    	$idade_aluno = Request::input('idade_aluno');
    	$endereco_aluno = Request::input('endereco_aluno');

    	DB::insert('insert into aluno (nome_aluno, email_aluno, idade_aluno, endereco_aluno) values (?,?,?,?)', 
    		array($nome_aluno, $email_aluno, $idade_aluno, $endereco_aluno));   	


    	return redirect('/alunos');
    }

}