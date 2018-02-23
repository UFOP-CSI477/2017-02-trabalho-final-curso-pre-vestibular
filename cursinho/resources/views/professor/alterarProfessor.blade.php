<!-- Busca codigo principal de cabecalho e rodape -->
@extends('principal')
@section('conteudo')

	<!-- Com os dados recebidos do controller a view exibe uma tabela com as ocorrências dos Alunos -->
	<h1><center>Alterar Aluno</center></h1>

<br><a href="/alunos">Voltar</a>

<div class="container">
	@foreach ($professor as $p)
  	 <form action="/professor/salvar/<?=$p->id_professor?>"  method="post">
  	 	  <input type="hidden" name="_token" value=" {{ csrf_token() }} " >
    
    <div class="form-group">
      <label for="usr">Name:</label>
      <input type="text" class="form-control" name="nome_professor" value =<?= "'".$p->nome_professor."'"?> >
    </div>
    
    <div class="form-group">
      <label for="usr">Email:</label>
      <input type="text" class="form-control" name="email_professor" value =<?=$p->email_professor?>>
    </div>
    
    <div class="form-group">
      <label for="usr">Idade:</label>
      <input type="text" class="form-control" name="idade_professor" value =<?=$p->idade_professor?>>
    </div>

    <div class="form-group">
      <label for="usr">Endereço:</label>
      <input type="text" class="form-control" name="endereco_professor" value =<?="'".$p->endereco_professor."'"?>>
    </div>

    <button type="submit">Salvar</button>
    <button>Voltar</button>
    @endforeach
  </form>
</div>
