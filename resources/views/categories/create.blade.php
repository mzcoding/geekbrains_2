@extends('layouts.app')
@section('content')

    <div class="col-md-8 blog-main">
        <h1>Добавление категоии</h1>
        <br>
        <form method="post" action="{{ route('categories.store') }}">
            @csrf
            <p>Заголовок: <br><input type="text" name="title" value="{{ old('title') }}" class="form-control"> </p>
            <p>Слаг:<br><input type="text" name="slug" class="form-control" value="{{ old('slug') }}"> </p>
            <button type="submit" class="btn btn-success">Добавить</button>
        </form>
    </div>
@stop