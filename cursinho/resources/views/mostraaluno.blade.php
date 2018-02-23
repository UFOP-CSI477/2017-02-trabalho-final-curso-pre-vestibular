<!-- Busca codigo principal de cabecalho e rodape -->
@extends('principal')
@section('conteudo')


<div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading"><center><h3>Informações do Aluno</h3></center></div>
                    <div class="panel-body text-center">
                        <div class="table">
                            <table class="table table-bordered table-responsive">
                                <thead>
                                <tr>
                                    <th><center>ID</center></th>
                                    <th><center>Nome</center></th>
                                    <th><center>E-mail</center></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($aluno as $a)
                                    <tr>
                                        <td>{{ $a->id_aluno }}</td>
                                        <td>{{ $a->nome_aluno }}</td>
                                        <td>{{ $a->email_aluno }}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <center><a href="/alunos"><button class="btn btn-default">Voltar</button></a><br><br></center>
    </div>
@endsection