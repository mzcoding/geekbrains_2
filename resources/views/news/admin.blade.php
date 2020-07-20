
<h3>Список записей</h3>
<br>
<table>
    <tr>
        <th>Заголовок</th>
        <th>Статус</th>
        <th>Дата создания</th>
    </tr>
    @foreach($news as $n)
        <tr>
            <td>{{ $n->title }}</td>
            <td> {{ $n->status }}</td>
            <td>{{ $n->created_at }}</td>
        </tr>
    @endforeach
</table>