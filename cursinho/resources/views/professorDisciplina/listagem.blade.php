<!-- Busca codigo principal de cabecalho e rodape -->
@extends('principal')
@section('conteudo')


	<div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading"><center><h3>Quadro de Docentes</h3></center></div>
                    <div class="panel-body text-center">
                        <div class="table">
                            <table class="table table-bordered table-responsive">
                                <thead>
                                <tr>
                                    <th><center>ID</center></th>
                                    <th><center>Professor</center></th>
                                    <!-- <th><center>E-mail</center></th> -->
                                    <!-- <th><center>Endereço</center></th> -->
                                    <th><center>Detalhar Disciplinas</center></th>
                                    <th><center>Cadastrar em Disciplina</center></th>
                                    <!-- <th><center>Excluir</center></th> -->
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($professor as $p)
                                    <tr>
                                        <td>{{ $p->id_professor }}</td>
                                        <td>{{ $p->nome_professor }}</td>
                                        <!-- <td>{{ $p->email_professor }}</td> -->
                                        <!-- <td>{{ $p->endereco_professor }}</td> -->
                                        <td><center><a href="/listarmaterias/<?=$p->id_professor?>"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span></a></center></td>
                                        <td><center><a href="/cadastrarEmMateria/<?=$p->id_professor?>"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a></center></td>
                                        <!-- <td><center><a href="/professores/delete/<?=$p->id_professor?>"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a></center></td> -->
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