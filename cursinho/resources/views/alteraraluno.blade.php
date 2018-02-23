<!-- Busca codigo principal de cabecalho e rodape -->
@extends('principal')
@section('conteudo')

	<!-- Com os dados recebidos do controller a view exibe uma tabela com as ocorrências dos Alunos -->
	<h1><center>Alterar Aluno</center></h1>

<br><a href="/alunos">Voltar</a>

<div class="container">
	@foreach ($aluno as $a)
  	 <form action="/alunos/salvar/<?=$a->id_aluno?>"  method="post">
  	 	  <input type="hidden" name="_token" value=" {{ csrf_token() }} " >
    
    <div class="form-group">
      <label for="usr">Name:</label>
      <input type="text" class="form-control" name="nome_aluno" value =<?= "'".$a->nome_aluno."'"?> >
    </div>
    
    <div class="form-group">
      <label for="usr">Email:</label>
      <input type="text" class="form-control" name="email_aluno" value =<?=$a->email_aluno?>>
    </div>
    
    <div class="form-group">
      <label for="usr">Idade:</label>
      <input type="text" class="form-control" name="idade_aluno" value =<?=$a->idade_aluno?>>
    </div>

    <div class="form-group">
      <label for="usr">Endereço:</label>
      <input type="text" class="form-control" name="endereco_aluno" value =<?="'".$a->endereco_aluno."'"?>>
    </div>

    <button type="submit">Salvar</button>
    <button>Voltar</button>
    @endforeach
  </form>
</div>
