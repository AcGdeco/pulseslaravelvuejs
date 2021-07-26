@extends('layouts.mainalternativa')
@section('title', 'Modificar Estoque')
@section('content')
    <br><br><br><br><br><br>
    @if (!empty($msg) && $msg == "Produto Excluído")
        <div class = "msgCadastrado" >{{ $msg }}</div>
    @elseif(!empty($msg))
        <div class = "msgErro" >{{ $msg }}</div>
    @endif
@endsection
