@extends('layouts.app')
@section('content')
    @if(session()->has('error'))
        <h3 style="color:red;">{{ session()->get('error') }}</h3><br><br>
    @endif
    <h2>Это кабинет пользователя, привет {{ Auth::user()->name }}</h2>
@stop