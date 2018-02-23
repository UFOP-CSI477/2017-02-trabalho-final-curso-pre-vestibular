<?php
namespace App\Http\Controllers;


use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use App\Disciplina;
use App\Professor;
use App\Aluno;
use App\ProfessorDisciplina;
use Request;
use App\Http\Controllers\ProfessorDisciplinaController;


class AlunoDisciplinaController extends Controller
{

	public function listarAlunosPorMaterias()
	{
		$idDisciplina = Request::route('id');
		$idProfessor = Request::route('idProfessor');

		$infoDisciplina = Disciplina::where('id_disciplina', '=', $idDisciplina)->get()->toArray();
		$infoProfessor = Professor::where('id_professor', '=', $idProfessor)->get()->toArray();

		$disciplina = DB::table('aluno_disciplina')
    			->join('aluno', 'aluno.id_aluno', '=', 'aluno_disciplina.aluno_id_aluno')
    			->join('disciplina', 'disciplina.id_disciplina', '=', 'aluno_disciplina.disciplina_id_disciplina')
    			->join('professor', 'professor.id_professor', '=', 'aluno_disciplina.id_professor')
    			->select("aluno.id_aluno",
    				"aluno.nome_aluno",
    				"professor.id_professor"
    			)
    			->where([['disciplina.id_disciplina','=', $idDisciplina],
    				['professor.id_professor','=', $idProfessor]
    				]
    			)
                ->get();

		return view('professorDisciplina.visualizarAlunosporDisciplina')->with(
			['disciplina' => $disciplina,
			 'nomeDisciplina' => reset($infoDisciplina)['nome_disciplina'],
			 'nomeProfessor' => reset($infoProfessor)['nome_professor']
			]
		);
	}

	public function matriculaAlunos()
	{
		$disciplina = Disciplina::orderBy('nome_disciplina')->get();

		return view('cadastro.cadastroAluno')->with(
			['disciplina' => $disciplina,
			]
		);
	}

	public function matriculaCadastro(){

		$idMateria = Request::route('id');

		$infoDisciplina = Disciplina::where('id_disciplina', '=', $idMateria)->get()->toArray();


		$alunos = Aluno::orderBy('id_aluno')->get();

		$professores = $this->listarProfessorEmDisciplina(
			$idMateria
		);


		return view('cadastro.cadastrar')->with(
			['alunos' => $alunos,
				'professores' => $professores,
				'infoDisciplina' => reset($infoDisciplina)
			]
		);
	}

	public function salvarMatricula(){

		$idAluno = Request::get('aluno');
		$idProfessor = Request::get('professor');
		$idDisciplina = Request::get('idDisciplina');


		DB::insert('insert into aluno_disciplina (aluno_id_aluno, disciplina_id_disciplina, id_professor) values (?,?,?)',
			array($idAluno, $idDisciplina, $idProfessor)
		);


		return redirect('/matricula');
	}

	public function listarProfessorEmDisciplina($id_disciplina){

		return  DB::table('professor_disciplina')
    			->join('professor', 'professor.id_professor', '=', 'professor_disciplina.professor_id_professor')
    			->join('disciplina', 'disciplina.id_disciplina', '=', 'professor_disciplina.disciplina_id_disciplina')
    			->select("professor.id_professor",
    				"professor.nome_professor"
    			)
    			->where('disciplina.id_disciplina','=', $id_disciplina)
                ->get();

	}

}