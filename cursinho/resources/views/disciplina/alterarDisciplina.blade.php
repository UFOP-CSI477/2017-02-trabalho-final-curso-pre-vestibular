<!-- Busca codigo principal de cabecalho e rodape -->
@extends('principal')
@section('conteudo')

	<!-- Com os dados recebidos do controller a view exibe uma tabela com as ocorrências dos Alunos -->
	<h1><center>Alterar Disciplina</center></h1>

<br><a href="/disciplinas">Voltar</a>

<div class="container">
	@foreach ($disciplina as $d)
  	 <form action="/disciplina/salvar/<?=$d->id_disciplina?>"  method="post">
  	 	  <input type="hidden" name="_token" value=" {{ csrf_token() }} " >
    
    <div class="form-group">
      <label for="usr">Name:</label>
      <input type="text" class="form-control" name="nome_disciplina" value =<?= "'".$d->nome_disciplina."'"?> >
    </div>
    
    <div class="form-group">
      <label for="usr">Descricao:</label>
      <input type="text" class="form-control" name="descricao_disciplina" value =<?="'".$d->descricao_disciplina."'"?>>
    </div>

    <button type="submit">Salvar</button>
    <button>Voltar</button>
    @endforeach
  </form>
</div>
