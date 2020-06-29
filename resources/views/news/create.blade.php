@extends('layouts.app')
@section('content')
    <div class="col-md-8 blog-main">
<h1>Добавление новости</h1>
<br>
<form method="post" action="{{ route('news.store') }}">
    @csrf
    <button type="submit">Ok</button>
</form>
    </div>
@stop