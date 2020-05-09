<?php


namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Guestbook;
use Symfony\Component\HttpFoundation\Request;

class mainController extends Controller
{

    public function main(Request $request)
    {
        if ($request->has('message') and $request->author) {
            $new = new Guestbook;
            $new->message = $request->message;
            $new->author = $request->author;

            $new->save();
            $request->session()->flash('message', 'Сообщение успешно добавлено');

        }
        $post = Guestbook::orderBy('created_at', 'desc')->get();
        echo '!!!';
        return view('guest', [
            'message' => $request->message,
            'author' => $request->author,
            'post' => $post,

        ]);
    }

    public function moderator()
    {
        return '!!';
    }
}
