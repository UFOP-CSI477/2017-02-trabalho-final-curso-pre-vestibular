<!-- Busca codigo principal de cabecalho e rodape -->
@extends('principal')
@section('conteudo')


	<div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading"><center><h3>Nossos Alunos</h3></center></div>
                    <br><a href="/aluno/novo"><button class="btn btn-primary">Inserir Aluno</button></a>                    
                    <div class="panel-body text-center">
                        <div class="table">
                            <table class="table table-bordered table-responsive">
                                <thead>
                                <tr>
                                    <th><center>ID</center></th>
                                    <th><center>Aluno</center></th>
                                    <th><center>Detalhar</center></th>
                                    <th><center>Alterar</center></th>
                                    <th><center>Excluir</center></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($alunos as $a)
                                    <tr>
                                        <td>{{ $a->id_aluno }}</td>
                                        <td>{{ $a->nome_aluno }}</td>
                                        <td><center><a href="/alunos/mostra?id=<?=$a->id_aluno?>"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></a></center></td>
                                        <td><center><a href="/alunos/alterar/<?=$a->id_aluno?>"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a></center></td>
                                        <td><center><a href="/alunos/delete/<?=$a->id_aluno?>"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a></center></td>
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
