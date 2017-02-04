<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Posts;
use Mail;
use View;
use Validator;

class HomeController extends Controller
{
    public function index()
    {
        $postsrecentes = Posts::orderBy('created_at', 'desc')->get();
        return view('inicio')->with(compact('postsrecentes'));
    }
    public function contato(Request $request)
    {
        $nome = $request->name;
        $email = $request->email;
        $mensagem = $request->mensagem;

        $validator = Validator::make($request->all(), [
            'email' => 'required|email|max:255',
            'name' => 'required|max:255',
            'mensagem' => 'required'
        ]);

        if (!$validator->fails()) {
     
        Mail::send('emails.contatosite', ['mensagem' => $mensagem,'titulo'=> "Contato pelo meu site",'nome'=>$nome,'email'=>$email], function ($message) use($email,$nome)
        {          
            $message->from($email, $nome);
            $message->subject('DanielFnZ - Contato pelo site');     
            $message->to('daniel.fnz@hotmail.com');
   
        });

        return View::make('emails.emailEnviado')->with(compact('nome'));
        
        }
    }
}
