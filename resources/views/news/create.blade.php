@extends('layouts.app')
@section('content')

    <div class="col-md-8 blog-main">
<h1>Добавление новости</h1>
<br>
<form method="post" action="{{ route('news.store') }}">
    @csrf
    <p>Заголовок: <br><input type="text" name="title" value="{{ old('title') }}" class="form-control"> </p>
    <p>Текст:<br><input type="text" name="text" class="form-control" value="{{ old('text') }}"> </p>
    <button type="submit" class="btn btn-success">Добавить</button>
</form>
    </div>
@stop