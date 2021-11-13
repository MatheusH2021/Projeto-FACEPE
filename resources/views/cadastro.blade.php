@extends('layout/index')

@section('conteudo')
<h1 id="h1">Cadastrar Cardápio</h1>
<p>Aqui você pode cadastrar pratos ao cardápio com todas as informações necessárias!</p>
<div class="container" id="cd">
<form action="/cadastrar" method="POST"autocomplete="off" style="padding-top:10px">
    @csrf
    <label class="form-control">Nome do prato:</label>
    <input class="form-control" type="text" name="nome" placeholder="Insira o nome do prato...">
    <label class="form-control">Tipo de refeição:</label>
    <select class="form-control" name="tipo">
        <option class="form-control" value="entrada">Entrada</option>
        <option class="form-control" value="prato principal">Prato principal</option>
        <option class="form-control" value="sobremesa">Sobremesa</option>
    </select>
    <label class="form-control">Descrição do prato:</label>
    <input class="form-control" type="text" name="desc" placeholder="Insira a escrição do seu prato...">
    <label class="form-control">Dia de disponibilidade:</label>
    <select class="form-control" name="dia">
        <option class="form-control" value="segunda-feira">Segunda-Feira</option>
        <option class="form-control" value="terca-feira">Terça-Feira</option>
        <option class="form-control" value="quarta-feira">Quarta-Feira</option>
        <option class="form-control" value="quinta-feira">Quinta-Feira</option>
        <option class="form-control" value="sexta-feira">Sexta-Feira</option>
        <option class="form-control" value="quarta-feira">Sábado</option>
        <option class="form-control" value="quarta-feira">Domingo</option>
    </select>
    <hr>
    <button class="btn btn-danger">Cadastrar</button>
</form>
</div>
@endsection