<?php
namespace App\Http\Controllers;


use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use App\Disciplina;
use App\Professor;
use App\ProfessorDisciplina;
use Request;

class ProfessorDisciplinaController extends Controller
{

	public function listarProfessor()
	{
		$professor = Professor::orderBy('nome_professor')->get();

		return view('professorDisciplina.listagem')->with('professor', $professor);
	}


	public function listarMateriasPorProfessor()
	{
		$idProfessor = Request::route('id');

		$disciplina = DB::table('professor_disciplina')
    			->join('disciplina', 'disciplina.id_disciplina', '=', 'professor_disciplina.disciplina_id_disciplina')
    			->select("disciplina.id_disciplina",
    				"disciplina.nome_disciplina",
    				"disciplina.descricao_disciplina"
    			)
    			->where('professor_disciplina.professor_id_professor','=', $idProfessor)
                ->get();

		return view('professorDisciplina.visualizarMaterias')->with(
			['disciplina'=> $disciplina,
				'idProfessor' => $idProfessor
			]
		);
	}

	public function cadastrarProfessorEmMateria(){
		$idProfessor =  Request::route('id');

		$professor = Professor::where('id_professor', '=', $idProfessor)->get()->toArray();

		$disciplinasProfessor = $this->buscarProfessorPorDisciplina(
			$idProfessor,
			'='
		);

		// separa quais materias o idProfessor tem, para lista quais materias o professor nao tem.
		$idsDisciplinas = [];
		foreach ($disciplinasProfessor as $value) {
			$idsDisciplinas[] = $value->id_disciplina;
		}

		//lista quais materias o professor nao tem para cadastro.

		$disciplinas = Disciplina::whereNotIn(
			'id_disciplina',
			$idsDisciplinas
		)->get();


		return view('professorDisciplina.cadastrarDisciplina')->with(
			['nomeProfessor' => reset($professor)['nome_professor'],
			'idProfessor' => reset($professor)['id_professor'],
			'disciplinas' => $disciplinas,
			'disciplinasProfessor' => $disciplinasProfessor
			]
		);

	}

	public function salvarDisciplinaPorProfessor(){

		$idDisciplina = Request::get('disciplina');

		$idProfessor = Request::get('idProfessor');

		DB::insert('insert into professor_disciplina (professor_id_professor, disciplina_id_disciplina) values (?,?)',array($idProfessor, $idDisciplina));

		// Session::flash('message', "Materia cadastrada com sucesso");
		return redirect('/cadastrarEmMateria/'.$idProfessor);

	}

	public function buscarProfessorPorDisciplina($idProfessor, $comparador = '='){

		return  DB::table('professor_disciplina')
    			->join('disciplina', 'disciplina.id_disciplina', '=', 'professor_disciplina.disciplina_id_disciplina')
    			->select("disciplina.id_disciplina",
    				"disciplina.nome_disciplina",
    				"disciplina.descricao_disciplina"
    			)
    			->where('professor_disciplina.professor_id_professor',$comparador, $idProfessor)
                ->get();
	}

}

