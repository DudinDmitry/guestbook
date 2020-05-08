<?php


namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Symfony\Component\HttpFoundation\Request;

class mainController extends Controller
{

    public function main(Request $request)
    {

        return view('guest',[
            'message'=>$request->message,
            'author'=>$request->author
        ]);
    }
}
