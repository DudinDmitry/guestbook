<h1>Редактирование статьи {{$message->id}}</h1>
<form method="post">
    {{csrf_field()}}
    <b>Автор:</b>
    <input type="text" name="author" value="{{$message->author}}"><br><br>
    <b>Сообщение:</b><br>
    <textarea style="width: 300px;height: 150px" name="message"> {{$message->message}}</textarea><br><br>
    <input type="submit" name="form">
</form>
