@extends('layouts.app')
@section('content')
    @if(session()->has('error'))
        <h3 style="color:red;">{{ session()->get('error') }}</h3><br><br>
    @endif
    <div>
        <p>Дата последнего входа: {{ $lastLogin }}</p>
    </div>



@stop