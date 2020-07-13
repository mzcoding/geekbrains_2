@extends('layouts.app')
@section('content')

    <div class="col-md-8 blog-main">
<h1>Добавление новости</h1>
<br>
<form method="post" action="{{ route('news.store') }}">
    @csrf
    <p>Заголовок: <br><input type="text" name="title" value="{{ old('title') }}" class="form-control"> </p>
    @if($errors->has('title'))
        <div class="alert alert-danger">
            @foreach($errors->get('title') as $error)
                <p style="margin-bottom: 0;">{{ $error }}</p>
            @endforeach
        </div>
    @endif
    <p>Текст:<br><input type="text" name="text" class="form-control" value="{{ old('text') }}"> </p>
    @if($errors->has('text'))
        <div class="alert alert-danger">
            @foreach($errors->get('text') as $error)
                <p style="margin-bottom: 0;">{{ $error }}</p>
            @endforeach
        </div>
    @endif
    <button type="submit" class="btn btn-success">Добавить</button>
</form>
    </div>
@stop