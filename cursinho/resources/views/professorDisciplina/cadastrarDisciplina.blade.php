<!-- Busca codigo principal de cabecalho e rodape -->
@extends('principal')
@section('conteudo')


<div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading"><center><h3>Cadastro de professor em disciplina</h3></center></div>
                     <div class="panel-heading"><left><h5>
                     Professor: <b>{{$nomeProfessor}}</b></h5></left></div>
                    <div class="panel-body text-center">
                        <div class="table">
                            <table class="table table-bordered table-responsive">

                                <thead>
                                <tr>
                                    <th><center>ID Disciplina</center></th>
                                    <th><center>Nome Disciplina</center></th>
                                    <th><center>Descricao</center></th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach($disciplinasProfessor as $p)
                                    <tr>
                                        <td>{{ $p->id_disciplina }}</td>
                                        <td>{{ $p->nome_disciplina }}</td>
                                        <td>{{ $p->descricao_disciplina }}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>

                            <div class="form-group">
                                <form action="/salvarDisciplina" method="post">
                                <input type="hidden" name="_token" value=" {{ csrf_token() }} " />

                                <div class="form-group">
                                    Selecione a disciplina:
                                    <select type="text" name="disciplina">
                                        <?php foreach ($disciplinas as $p):?>
                                            <option value =<?= "'".$p->id_disciplina."'"?> > <?=$p->nome_disciplina?></option>
                                        <?php endforeach ?>
                                    </select>
                                    <input type="hidden" name="idProfessor" id="idProfessor" value={{$idProfessor}} >

                                    <!-- Nome do produto: <input type="text" name="produto" value=""><br> -->
                                    <input class="btn btn-primary" type="submit" value="Cadastrar">
                                </div>

                                </form>



                        </div>
                    </div>
                </div>
            </div>
        </div>
        <center><a href="/relacionar"><button class="btn btn-default">Voltar</button></a><br><br></center>

    </div>
@endsection