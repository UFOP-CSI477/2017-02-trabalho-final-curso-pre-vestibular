<!-- Busca codigo principal de cabecalho e rodape -->
@extends('principal')
@section('conteudo')


<div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading"><center><h3>Cadastrar novo Aluno</h3></center></div>
                    <div class="panel-body text-center">
                        <div class="table">
                            <table class="table table-bordered table-responsive">
                                <div class="container">
                                  <form action="/aluno/adiciona" method="post">

                                    <input type="hidden" name="_token" value=" {{ csrf_token() }} " />

                                    <div class="form-group">
                                      <label for="usr">Nome:</label>
                                      <input type="text" class="form-control" name="nome_aluno">
                                    </div>

                                    <div class="form-group">
                                      <label for="usr">Email:</label>
                                      <input type="text" class="form-control" name="email_aluno">
                                    </div>

                                    <div class="form-group">
                                      <label for="usr">Idade:</label>
                                      <input type="text" class="form-control" name="idade_aluno">
                                    </div>

                                    <div class="form-group">
                                      <label for="usr">Endereço:</label>
                                      <input type="text" class="form-control" name="endereco_aluno">
                                    </div>

                                    <button class="btn btn-primary" type="submit">Salvar</button>
                                    <button class="btn btn-default" type="reset">Limpar</button>
                                    <button class="btn btn-danger">Voltar</button>

                                  </form>
                                </div>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- <center><a href="/"><button class="btn btn-default">Voltar</button></a></center> -->
    </div>
@endsection