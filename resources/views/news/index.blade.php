<a href="{{ route('news.edit', ['id' => $id]) }}">Перейти на страницу</a> с #ID = {{ $id }}
<br>
@foreach($news as $n)
    <h2>{{ $n['title'] }}</h2>
    <p>{{ $n['text'] }}</p>
@endforeach