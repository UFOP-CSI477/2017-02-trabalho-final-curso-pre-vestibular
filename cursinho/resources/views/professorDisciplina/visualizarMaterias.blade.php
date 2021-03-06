<!-- Busca codigo principal de cabecalho e rodape -->
@extends('principal')
@section('conteudo')


<div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading"><center><h3>Relacionamento Professor X Disciplina</h3></center></div>
                    <div class="panel-body text-center">
                        <div class="table">
                            <table class="table table-bordered table-responsive">
                                <thead>
                                <tr>
                                    <th><center>ID Disciplina</center></th>
                                    <th><center>Nome Disciplina</center></th>
                                    <th><center>Descricao</center></th>
                                    <th><center>Alunos Matriculados</center></th>

                                </tr>
                                </thead>
                                <tbody>
                                @foreach($disciplina as $p)
                                    <tr>
                                        <td>{{ $p->id_disciplina }}</td>
                                        <td>{{ $p->nome_disciplina }}</td>
                                        <td>{{ $p->descricao_disciplina }}</td>
                                        <td> <center><a href="/listarAlunos/<?=$p->id_disciplina?>/<?=$idProfessor?>"><span class="glyphicon glyphicon-list" aria-hidden="true"></span></a></center> </td>

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