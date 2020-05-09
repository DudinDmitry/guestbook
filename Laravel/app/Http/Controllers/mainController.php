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
        return view('guest', [
            'message' => $request->message,
            'author' => $request->author,
            'post' => $post,

        ]);
    }

    public function moderator()
    {
        $posts=Guestbook::orderBy('created_at','desc')->get();
        $i=0;
        return view('guestModerator',[
            'posts'=>$posts,
            'i'=>$i,
        ]);
    }
    public function delete($id)
    {
        return $id;
    }
    public function edit($id)
    {
        return 'edit'.$id;
    }
    public static function bgColorTable($num)
    {
        $bg='white';
        if($num%2==0)
        {
            $bg='WhiteSmoke';
        }
        return $bg;
    }
}
