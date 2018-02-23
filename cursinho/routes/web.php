<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', 'HomeController@inicio');


// Rotas para Aluno
Route::get('/alunos', 'AlunosController@index');

Route::get('/alunos/mostra', 'AlunosController@mostra');

Route::get('/alunos/delete/{id}', 'AlunosController@delete');

Route::get('/alunos/alterar/{id}', 'AlunosController@alterar');

Route::post('/alunos/salvar/{id}', 'AlunosController@salvar');



Route::get('/aluno/novo', 'AlunosController@novo');

Route::post('/aluno/adiciona', 'AlunosController@adiciona');

Route::get('/aluno/criar', 'AlunosController@create');


// Rotas para Professor
Route::get('/professores', 'ProfessoresController@listaProfessores');

Route::get('/professores/mostra', 'ProfessoresController@mostra');

Route::get('/professor/novo', 'ProfessoresController@novo');

Route::post('/professor/adiciona', 'ProfessoresController@adiciona');

Route::get('/professores/delete/{id}', 'ProfessoresController@delete');

Route::get('/professor/alterar/{id}', 'ProfessoresController@alterar');

Route::post('/professor/salvar/{id}', 'ProfessoresController@salvar');


// Rotas para Disciplina
Route::get('/disciplinas', 'DisciplinasController@listaDisciplinas');

Route::get('/disciplinas/mostra', 'DisciplinasController@mostra');

Route::get('disciplinas/delete/{id}', 'DisciplinasController@delete');

Route::get('/disciplina/novo', 'DisciplinasController@novo');

Route::post('/disciplina/adiciona', 'DisciplinasController@adiciona');

Route::get('/disciplina/alterar/{id}', 'DisciplinasController@alterar');

Route::post('/disciplina/salvar/{id}', 'DisciplinasController@salvar');


// Relacionamento professor  disciplina

Route::get('/relacionar', 'ProfessorDisciplinaController@listarProfessor');
Route::get('/listarmaterias/{id}', 'ProfessorDisciplinaController@listarMateriasPorProfessor');
Route::get('/cadastrarEmMateria/{id}', 'ProfessorDisciplinaController@cadastrarProfessorEmMateria');

Route::post('/salvarDisciplina', 'ProfessorDisciplinaController@salvarDisciplinaPorProfessor');


Route::get('/listarAlunos/{id}/{idProfessor}', 'AlunoDisciplinaController@listarAlunosPorMaterias');


Route::get('/matricula', 'AlunoDisciplinaController@matriculaAlunos');
Route::get('/matricula/cadastro/{id}', 'AlunoDisciplinaController@matriculaCadastro');
Route::post('/salvarAlunoDisciplina', 'AlunoDisciplinaController@salvarMatricula');



