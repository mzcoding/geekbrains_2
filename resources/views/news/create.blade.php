<h1>Добавление новости</h1>
<br>
<form method="post" action="{{ route('news.store') }}">
    @csrf
    <button type="submit">Ok</button>
</form>