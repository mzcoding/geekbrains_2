@extends('layouts.app')
@section('content')

    <div class="col-md-8 blog-main">
        <h1>Редактирование новости #{{$news->id}}</h1>
        <br>
        <form method="post" action="{{ route('news.update', ['id' => $news->id]) }}">
            @method('PUT')
            @csrf
            <p>Заголовок: <br><input type="text" name="title" value="{{ $news->title  }}" class="form-control"> </p>
            <p>Текст:<br><input type="text" name="text" class="form-control" value="{{ $news->text }}"> </p>
            <button type="submit" class="btn btn-success">Редактировать</button>
        </form>
    </div>
@stop