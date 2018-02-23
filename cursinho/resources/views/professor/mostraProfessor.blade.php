<!-- Busca codigo principal de cabecalho e rodape -->
@extends('principal')
@section('conteudo')


<div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading"><center><h3>Informações do Professor</h3></center></div>
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
                                @foreach($professor as $p)
                                    <tr>
                                        <td>{{ $p->id_professor }}</td>
                                        <td>{{ $p->nome_professor }}</td>
                                        <td>{{ $p->email_professor }}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <center><a href="/professores"><button class="btn btn-default">Voltar</button></a><br><br></center>
    </div>
@endsection