@extends('layouts.main')
@section('title', 'HOME')
@section('content')
    <br><br><br><br><br><br>
    <form action="/qtdatualizada" method="post" enctype="multipart/form-data">
        @csrf
        <dar-baixa :produtos={{$produtos}}></dar-baixa>
    </form>
@endsection
