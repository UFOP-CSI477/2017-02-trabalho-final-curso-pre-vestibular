<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use App\Professor;
use Request;
use Illuminate\Support\Facades\Schema;

class ProfessoresController extends Controller
{
	public function listaProfessores()
	{
		$professor = Professor::orderBy('nome_professor')->get();

		return view('listagemProfessor')->with('professor', $professor);
	}

	public function novo()
	{
		return view('professor.criar');
	}


	public function adiciona()
    {
    	$nome_professor = Request::input('nome_professor');
    	$email_professor = Request::input('email_professor');
    	$idade_professor = Request::input('idade_professor');
    	$endereco_professor = Request::input('endereco_professor');

    	DB::insert('insert into professor (nome_professor, email_professor, idade_professor, endereco_professor) values (?,?,?,?)',
    		array($nome_professor, $email_professor, $idade_professor, $endereco_professor));

    	return redirect('/professores');
    }

    public function mostra()
    {
    	$idProfessor = Input::get('id');
    	$professor = Professor::where('id_professor', '=', $idProfessor)->get();

    	return view('professor.mostraProfessor')->with('professor', $professor);
    }

    public function delete()
    {
        // Schema::drop('id_professor_replys');
        //Schema::drop('id_professor');

    	$idProfessor = Request::route('id');
    	$professor = Professor::where('id_professor', '=', $idProfessor)->delete();

    	return view('listagemProfessor')->with('professor', Professor::all());
    }

    public function alterar()
    {
    	$idProfessor = Request::route('id');
    	$professor = Professor::where('id_professor', '=', $idProfessor)->get();

    	return view('professor.alterarProfessor')->with('professor', $professor);
    }

    public function salvar()
    {

    	$idProfessor = Request::route('id');

    	$professor = Professor::findOrFail($idProfessor);

    	$professor->nome_professor = Request::input('nome_professor');
    	$professor->email_professor = Request::input('email_professor');
    	$professor->idade_professor = Request::input('idade_professor');
    	$professor->endereco_professor = Request::input('endereco_professor');

    	$professor->save();

    	return redirect('/professores')->with('message', 'Professor alterado com sucesso!');
    }


}