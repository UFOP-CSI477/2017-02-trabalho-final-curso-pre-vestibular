<!-- Busca codigo principal de cabecalho e rodape -->
@extends('principal')
@section('conteudo')


<div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading"><center><h3>Lista de Alunos</h3></center></div>
                     <div class="panel-heading"><left><h5>Disciplina: <b>{{$nomeDisciplina}}</b>
                        <br>
                     Professor: <b>{{$nomeProfessor}}</b></h5></left></div>
                    <div class="panel-body text-center">
                        <div class="table">
                            <table class="table table-bordered table-responsive">
                                <thead>
                                <tr>
                                    <th><center>ID Aluno</center></th>
                                    <th><center>Nome Aluno</center></th>


                                </tr>
                                </thead>
                                <tbody>
                                @foreach($disciplina as $p)
                                    <tr>
                                        <td>{{ $p->id_aluno }}</td>
                                        <td>{{ $p->nome_aluno }}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <center><a href="/relacionar"><button class="btn btn-default">Voltar</button></a><br><br></center>

    </div>
@endsection