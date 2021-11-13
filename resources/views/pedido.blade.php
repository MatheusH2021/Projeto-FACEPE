@extends('layout/index')

@section('conteudo')
<h1 id="h1">Fazer pedido</h1>
<p>Quer aproveitar nossos produtos no conforto de sua casa? faça o seu pedido já!</p>
<div class="container" id="cd">
<form action="/realizarpedido" method="POST" autocomplete="off"style="padding-top:10px">
    @csrf
    <label class="form-control">Nome:</label>
    <input class="form-control" type="text" name="nome" placeholder="Insira o seu nome...">
    <label class="form-control">Endereço:</label>
    <input class="form-control" type="text" name="ende" placeholder="Insira seu endereço...">
    <label class="form-control">Pedido</label>
    <input class="form-control" type="text" name="nped" placeholder="Insira o seu pedido aqui...">
    <label class="form-control">Forma de pagamento</label>
    <select class="form-control" name="fpag">
        <option class="form-control" value="cartao">Cartão</option>
        <option class="form-control" value="dinheiro">Dinheiro</option>
    </select>
    <hr>
    <button class="btn btn-danger">Finalizar Pedido</button>
</form>
</div>
<h1 id="h1">Ainda ta em dúvida no que pedir?</h1>
<p>Se ainda estiver em dúvida no que pedir, acesse nosso <a href="/cardapio">cardápio</a> e fique por dentro de tudo que oferecemos!!</p>  
@endsection