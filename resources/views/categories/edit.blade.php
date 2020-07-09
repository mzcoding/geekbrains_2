@extends('layouts.app')
@section('content')

    <div class="col-md-8 blog-main">
        <h1>Редактирование категоии</h1>
        <br>
        <form method="post" action="{{ route('categories.edit') }}">
            @csrf
            <p>Заголовок: <br><input type="text" name="title" value="{{ old('title') }}" class="form-control"> </p>
            <p>Слаг:<br><input type="text" name="slug" class="form-control" value="{{ old('slug') }}"> </p>
            <button type="submit" class="btn btn-success">Сохранить</button>
        </form>
    </div>
@stop