@extends('layouts.main')
@section('title', 'Novo Produto')
@section('content')
    <br><br><br><br><br><br>
    <form action="/produtos" method="post" enctype="multipart/form-data">
        @csrf
        @if (!empty($msg) && $msg == "Produto cadastrado")
            <div class = "msgCadastrado" >{{ $msg }}</div>
        @elseif(!empty($msg))
            <div class = "msgErro" >{{ $msg }}</div>
        @endif
        <novo-produto></novo-produto>
    </form>
@endsection

