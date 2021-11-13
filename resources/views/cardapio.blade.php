@extends('layout/index')

@section('conteudo')
<h1 id="h1">Cardápio</h1>
<p>
    Aqui você encontra todo o nosso cardápio com todos os pratos e os dias da semana que servimos ele, para não perder nenhum item que você possa querer!! 
</p>
<table class="table">
  <tr style="background-color: red; color: #C1A56D;">
    <td>Nome</td>
    <td>Tipo</td>
    <td>Descrição</td>
    <td>Dia de disponibilidade</td>
  </tr>
  @foreach($pratos as $prato)
  <tr>
    <td>{{$prato->nome}}</td>
    <td>{{$prato->tipo}}</td>
    <td>{{$prato->desc}}</td>
    <td>{{$prato->dia}}</td>
  </tr>
  @endforeach
</table>
@endsection