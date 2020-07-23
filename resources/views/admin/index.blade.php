<a href="{!! route('news.create') !!}">Добавить новость</a>
<br>
<a href="{{ route('account') }}">В лк</a>
<br>
<a href="{{ route('queue.parse') }}">Добавить в очередь</a>
<br>
@if(session()->has('success')) {{ session()->get('success') }} @endif