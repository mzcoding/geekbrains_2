@extends('layouts.app')
@push('css')
    <link href="{{ asset('blog.css') }}" rel="stylesheet">
@endpush
@section('content')
    <div class="col-md-8 blog-main">
        <h3 class="pb-4 mb-4 font-italic border-bottom">
            From the Firehose
        </h3>
        @forelse($news as $n)
        <div class="blog-post">
            <h2 class="blog-post-title">{{ $n['title'] }}</h2>
            <p class="blog-post-meta">January 1, 2014 by <a href="{{ route('news.edit', ['id' => $id]) }}">Изменить</a></p>

            <p> {!! $n['text'] !!} </p>
        </div><!-- /.blog-post -->
        @empty
            <h3>Сейчас новостей нет</h3>
        @endforelse



        <nav class="blog-pagination">
            <a class="btn btn-outline-primary" href="#">Older</a>
            <a class="btn btn-outline-secondary disabled" href="#" tabindex="-1" aria-disabled="true">Newer</a>
        </nav>

    </div><!-- /.blog-main -->
@stop
