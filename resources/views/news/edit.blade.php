@extends('layouts.app')
@section('content')


    <div class="col-md-8 blog-main">
        <h1>Редактирование новости #{{$news->id}}</h1>
        <br>
        <form method="post" action="{{ route('news.update', ['news' => $news->id]) }}">
            @method('PUT')
            @csrf
            <p>Заголовок: <br><input type="text" name="title" value="{{ $news->title  }}" class="form-control"> </p>
             @if($errors->has('title'))
                    <div class="alert alert-danger">
                     @foreach($errors->get('title') as $error)
                                <p style="margin-bottom: 0;">{{ $error }}</p>
                     @endforeach
                    </div>
             @endif

            <p>Текст:<br><input type="text" name="text" class="form-control" value="{{ $news->text }}"> </p>
            @if($errors->has('text'))
                <div class="alert alert-danger">
                    @foreach($errors->get('text') as $error)
                        <p style="margin-bottom: 0;">{{ $error }}</p>
                    @endforeach
                </div>
            @endif
            <button type="submit" class="btn btn-success">Редактировать</button>
        </form>
    </div>
@stop