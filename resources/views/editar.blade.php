@extends('layouts.mainalternativa')
@section('title', 'LOGIN BD')
@section('content')
<br><br><br><br>
<form action="/atualizarproduto" method="post" enctype="multipart/form-data">
    @csrf
    @if (!empty($msg) && $msg == "Produto atualizado")
        <div class = "msgCadastrado" >{{ $msg }}</div>
    @elseif(!empty($msg))
        <div class = "msgErro" >{{ $msg }}</div>
    @endif
    <editar-produto id={{$produto->id}} nome={{$produto->nome}} sku={{$produto->sku}} qtd={{$produto->qtd}}></editar-produto>
</form>
@endsection







