<body style="align: center">
<h1>Гостевая книга</h1>
@if(Session::has('message'))
    <p style="color: green">{{Session::get('message')}}</p>
@endif
@if(sizeof($deleted))
    <a href="moderator/deleted-post" style="margin: 5px;">Восстановить удалённые записи</a><br><br>
@endif
<div style="width: 600px;border: 1px solid gray;">

    @foreach($posts as $elem)
        <div style="border: 1px solid gray;background-color:
        {{\App\Http\Controllers\mainController::bgColorTable($i++)}};margin: 10px">
            <p style="text-align: left; margin: 5px"><b>ID: {{$elem->id}}</b>
                | Автор: {{$elem->author}} |
                Дата публикации: {{$elem->created_at}}</p>
            <p style="text-align: left; margin: 5px"></p>
            <div style="border: 1px solid gray;margin: 5px;">
                <p style="margin: 5px">Сообщение: {{$elem->message}}</p>
            </div>
            <a href="moderator/edit/{{$elem->id}}" style="margin: 5px;color: forestgreen">Редактировать</a> |
            <a href="moderator/delete/{{$elem->id}}" style="color: red">Удалить</a>
        </div>
    @endforeach

</div>
</body>

