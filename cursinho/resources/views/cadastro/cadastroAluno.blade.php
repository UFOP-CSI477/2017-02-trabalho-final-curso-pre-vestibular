<!-- Busca codigo principal de cabecalho e rodape -->
@extends('principal')
@section('conteudo')


    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading"><center><h3>Matricula de Alunos</h3></center></div>
                    <div class="panel-body text-center">
                        <div class="table">
                            <table class="table table-bordered table-responsive">
                                <thead>
                                <tr>
                                    <th><center>ID</center></th>
                                    <th><center>Disciplinas</center></th>
                                    <th><center>Matricular de Alunos</center></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($disciplina as $d)
                                    <tr>
                                        <td>{{ $d->id_disciplina }}</td>
                                        <td>{{ $d->nome_disciplina }}</td>
                                        <td><center><a href="/matricula/cadastro/<?=$d->id_disciplina?>"><span class="glyphicon glyphicon-hand-left" aria-hidden="true"></span></a></center></td>
                                        <!-- <td><center><a href="/disciplina/alterar/<?=$d->id_disciplina?>"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a></center></td> -->
                                        <!-- <td><center><a href="/disciplinas/delete/<?=$d->id_disciplina?>"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a></center></td> -->
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <center><a href="/"><button class="btn btn-default">Voltar</button></a></center>
    </div>
@endsection