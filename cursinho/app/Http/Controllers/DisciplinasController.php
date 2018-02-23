<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use App\Disciplina;
use Request;

class DisciplinasController extends Controller
{
	
	public function listaDisciplinas()
	{
		$disciplina = Disciplina::orderBy('nome_disciplina')->get();

		return view('listagemDisciplina')->with('disciplina', $disciplina);
	}

	public function delete()
	{
		$idDisciplina = Request::route('id');
		$disciplina = Disciplina::where('id_disciplina', '=', $idDisciplina)->delete();

		return view('listagemDisciplina')->with('disciplina', Disciplina::all());
	}

	public function mostra()
	{
		$idDisciplina = Input::get('id');
		$disciplina = Disciplina::where('id_disciplina', '=', $idDisciplina)->get();

		return view('disciplina.mostrarDisciplina')->with('disciplina', $disciplina);
	}

	public function novo()
	{
		return view('disciplina.criar');
	}

	public function adiciona()
	{
		$nome_disciplina = Request::input('nome_disciplina');
		$descricao_disciplina = Request::input('descricao_disciplina');

		DB::insert('insert into disciplina(nome_disciplina, descricao_disciplina) values(?, ?)', array($nome_disciplina, $descricao_disciplina));

		return redirect('/disciplinas');
	}

	public function alterar()
	{
		$idDisciplina = Request::route('id');
    	$disciplina = Disciplina::where('id_disciplina', '=', $idDisciplina)->get();

    	return view('disciplina.alterarDisciplina')->with('disciplina', $disciplina);
	}

	public function salvar()
    {

    	$idDisciplina = Request::route('id');

    	$disciplina = Disciplina::findOrFail($idDisciplina);

    	$disciplina->nome_disciplina = Request::input('nome_disciplina');
    	$disciplina->descricao_disciplina = Request::input('descricao_disciplina');

    	$disciplina->save();

    	return redirect('/disciplinas')->with('message', 'Disciplina alterada com sucesso!');
    }



}