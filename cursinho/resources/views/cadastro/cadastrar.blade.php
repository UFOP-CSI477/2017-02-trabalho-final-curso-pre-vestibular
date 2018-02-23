<!-- Busca codigo principal de cabecalho e rodape -->
@extends('principal')
@section('conteudo')


<div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading"><center><h3>Matricula de Alunos</h3></center></div>
                     <div class="panel-heading"><left><h5>
                     Matéria: <b>{{$infoDisciplina['nome_disciplina']}}</b></h5></left></div>
                    <div class="panel-body text-center">
                        <div class="table">

                            <div class="form-group">
                                <form action="/salvarAlunoDisciplina" method="post">
                                <input type="hidden" name="_token" value=" {{ csrf_token() }} " />

                                <div class="form-group">
                                    Selecione o professor:
                                    <select type="text" name="professor">
                                        <?php foreach ($professores as $p):?>
                                            <option value =<?= "'".$p->id_professor."'"?> > <?=$p->nome_professor?></option>
                                        <?php endforeach ?>
                                    </select>
                                </div>

                                <br>

                                <div class="form-group">
                                    Selecione o aluno:
                                    <select type="text" name="aluno">
                                        <?php foreach ($alunos as $a):?>
                                            <option value =<?= "'".$a->id_aluno."'"?> > <?=$a->nome_aluno?></option>
                                        <?php endforeach ?>
                                    </select>

                                <br><br><br>

                                <input type="hidden" name="idDisciplina" id="idDisciplina" value={{$infoDisciplina['id_disciplina']}} >

                                    <input class="btn btn-primary" type="submit" value="Cadastrar">
                                </div>


                                </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <center><a href="/matricula"><button class="btn btn-default">Voltar</button></a><br><br></center>

    </div>
