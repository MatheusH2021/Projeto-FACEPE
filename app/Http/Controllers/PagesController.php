<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dish;
use App\Models\Order;

class PagesController extends Controller
{
    public function home(){
        return view('home');
    }
    public function cadastro(){
        return view('cadastro');
    }
    public function cardapio(){
        $pratos = Dish::all();
        return view('cardapio')->with(['pratos'=>$pratos]);
    }
    public function pedido(){
        return view('pedido');
    }
    public function cadastrar(Request $n){
        $novo = new Dish();
        $novo->nome = $n->nome;
        $novo->tipo = $n->tipo;
        $novo->desc = $n->desc;
        $novo->dia = $n->dia;
        $novo->save();
        return view('telas_cadastroEpedido/cadastrar');
    }
    public function rPedido(Request $p){
        $novo = new Order();
        $novo->nome = $p->nome;
        $novo->endereco = $p->ende;
        $novo->npedido = $p->nped;
        $novo->fpagamento = $p->fpag;
        $novo->save();
        return view('telas_cadastroEpedido/prealizado');
    }
        

}
