<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Posts;
use View;
use Redirect;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Posts::all();
        $postsrecentes = Posts::all();
        return view('blog.inicio')->with(compact('posts','postsrecentes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return View::make('blog.criar');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $this->validate($request, [
        'titulo' => 'required|max:255',
        'slug' => 'required|max:255',
        'conteudo' => 'required|max:3000',
        'imagem' => 'required|max:500',
        'ativo' => 'required'
        ]);

    Posts::create($request->all());
    return redirect()->action('PostsController@index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    $post = Posts::where('slug', (string)$id)->first();

    if($post == null) {
        return response()->view('errors.404', [], 404);
    }
    else {
        return view('blog.individual')->with(compact('post'));
    }


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
