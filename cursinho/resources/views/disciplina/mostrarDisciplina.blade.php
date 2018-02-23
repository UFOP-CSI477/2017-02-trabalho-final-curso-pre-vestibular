<!-- Busca codigo principal de cabecalho e rodape -->
@extends('principal')
@section('conteudo')


<div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading"><center><h3>Informações da Disciplina</h3></center></div>
                    <div class="panel-body text-center">
                        <div class="table">
                            <table class="table table-bordered table-responsive">
                                <thead>
                                <tr>
                                    <th><center>ID</center></th>
                                    <th><center>Nome</center></th>
                                    <th><center>Descricao</center></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($disciplina as $p)
                                    <tr>
                                        <td>{{ $p->id_disciplina }}</td>
                                        <td>{{ $p->nome_disciplina }}</td>
                                        <td>{{ $p->descricao_disciplina }}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <center><a href="/disciplinas"><button class="btn btn-default">Voltar</button></a><br><br></center>
    </div>
@endsection