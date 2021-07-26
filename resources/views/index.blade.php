@extends('layouts.main')
@section('title', 'HOME')
@section('content')
    <br><br><br><br><br><br>
    @foreach($logins as $login)
        <login-componente login="{{$login->login}}" senha="{{$login->password}}"></login-componente>
    @endforeach
@endsection
