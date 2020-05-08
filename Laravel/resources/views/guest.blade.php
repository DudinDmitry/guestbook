<body style="align: center">
<center>
    <h1>Гостевая книга</h1>
    <form method="post">
    {{csrf_field()}}
        <textarea cols="60" rows="5" placeholder="Введите текст" style="margin: 10px" name="message"></textarea><br>
        <input type="text" placeholder="Автор" name="author"><br><br>
        <input type="submit">
    </form>
    <div style="width: 400px;height:200px;border: 1px solid gray;">
        @if($message)
            Сообщение: {{$message}} <br>
            Автор: {{$author}}
        @endif
    </div>
</center>
</body>

