<h1>Удалённые сообщения</h1>
<table border="1px" style="text-align: center">
    <tr>
        <th>ID</th>
        <th>Автор</th>
        <th>Сообщение</th>
        <th>Дата добавления</th>
        <th>Восстановить</th>
        <th>Удалить</th>
    </tr>
    <tr>
        @foreach($deletedPost as $post)
            <th>{{$post->id}}</th>
            <td>{{$post->author}}</td>
            <td>{{$post->message}}</td>
            <td>{{$post->created_at}}</td>
            <td><a href="deleted-post/recovery/{{$post->id}}" style="text-decoration: none">✅</a> </td>
            <td><a href="deleted-post/del/{{$post->id}}" style="text-decoration: none">❌</a> </td>
        @endforeach
    </tr>
</table>
