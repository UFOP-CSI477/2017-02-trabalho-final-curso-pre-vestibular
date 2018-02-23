@extends('principal')
@section('conteudo')

<div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading"><center><h2>Menu Principal</h2></center></div>
                    <br><br>
					<center><a href="/alunos"><button class="btn btn-primary">Listar Alunos</button></a><br><br></center>

					<center><a href="/professores"><button class="btn btn-danger">Listar Professores</button></a></center><br>

					<center><a href="/disciplinas"><button class="btn btn-warning">Listar Disciplinas</button></a></center><br>

					<center><a href="/matricula"><button class="btn btn-success"> Matricula de Alunos</button></a></center><br>

					<center><a href="/relacionar"><button class="btn btn-info">Professor X Disciplinas</button></a></center><br><br>

				</div>
			</div>
		</div>
</div>