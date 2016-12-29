<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Posts;
use Mail;
use View;

class HomeController extends Controller
{
    public function index()
    {
        $postsrecentes = Posts::all();
        return view('inicio')->with(compact('postsrecentes'));
    }
    public function contato(Request $request)
    {
        $nome = $request->name;
        $email = $request->email;
        $mensagem = $request->mensagem;
        Mail::send('emails.contatosite', ['mensagem' => $mensagem,'titulo'=> "Contato pelo meu site",'nome'=>$nome,'email'=>$email], function ($message) use($email,$nome)
        {          
            $message->from($email, 'Daniel');
            $message->subject('DanielFnZ - Contato pelo site');     
            $message->to('daniel.fnz@hotmail.com');
   
        });

        return View::make('emails.emailEnviado')->with(compact('nome'));
    }
}
