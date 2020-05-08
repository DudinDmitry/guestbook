<body style="align: center">
<center>
    <h1>Гостевая книга</h1>
    @if(Session::has('message'))
    <p style="color: green">{{Session::get('message')}}</p>
    @endif
    <form method="post">
        {{csrf_field()}}
        <textarea cols="60" rows="5" placeholder="Введите текст" style="margin: 10px" name="message"></textarea><br>
        <input type="text" placeholder="Автор" name="author"><br><br>
        <input type="submit">
    </form>
    <div style="width: 400px;height:0px;border: 1px solid gray;">
        @if($post)
            @foreach($post as $elem)
                <div style="border: 1px solid gray;background-color: aliceblue">
                    <p style="text-align: left; margin: 5px">Автор: {{$elem->author}}</p>
                    <p style="text-align: left; margin: 5px"> Дата публикации: {{$elem->created_at}}</p>
                    <div style="border: 1px solid gray;margin: 5px;background-color: gainsboro">
                        <p>Сообщение: {{$elem->message}}</p>
                    </div>
                </div>
            @endforeach
        @endif
    </div>
</center>
</body>

