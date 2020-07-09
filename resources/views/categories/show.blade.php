@extends('layouts.app')
@section('content')

    <div class="col-md-8 blog-main">
       <h2>Список новостей категории - {{ $category->title }}</h2><br><br>
        @foreach($category->news as $news)
            <h4>{{ $news->title }}</h4>
            <br>
            <p>{!! $news->text !!}</p>
            <br><hr>
        @endforeach
        <br>
    </div>
@stop