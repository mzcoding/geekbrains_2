@extends('layouts.app')
@push('css')
    <link href="{{ asset('blog.css') }}" rel="stylesheet">
@endpush
@section('content')
    <div class="col-md-8 blog-main">
        <h3 class="pb-4 mb-4 font-italic border-bottom">
            Список новостей
        </h3>
        @forelse($news as $n)
        <div class="blog-post">
            <h2 class="blog-post-title">{{ $n->title }}</h2>
            <p class="blog-post-meta"> @if(!is_null($n->updated_at)) {{ $n->updated_at->format('d-m-Y H:i') }}
                    @else {{ $n->created_at->format('d-m-Y H:i') }}  @endif
                <a href="{{ route('news.edit', ['news' => $n]) }}">Изменить</a></p>

            <p> {!! $n->text !!} </p>
        </div><!-- /.blog-post -->
        @empty
            <h3>Сейчас новостей нет</h3>
        @endforelse



        <nav class="blog-pagination">
           {!! $news->links() !!}
        </nav>

    </div><!-- /.blog-main -->
@stop
