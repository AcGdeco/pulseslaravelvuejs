@extends('layouts.main')
@section('title', 'HOME')
@section('content')
    <br><br><br><br><br><br>
    <div style = "display:flex;justify-content:center;padding:10px;" ><span class = "voltar" onclick="window.open(document.referrer,'_self');">&lt; Voltar</span></div>
    @if (!empty($msg) && $msg == "Baixa / incremento cadastrado")
        <div class = "msgCadastrado" >{{ $msg }}</div>
    @elseif(!empty($msg))
        <div class = "msgErro" >{{ $msg }}</div>
    @endif
@endsection
