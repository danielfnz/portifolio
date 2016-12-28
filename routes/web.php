<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('inicio');
});
Route::get('/inicio', function () {
    return view('inicio');
});
Route::get('/blog', function () {
    return view('blog.inicio');
});
Route::get('/portifolio', function () {
    return view('portifolio.portifolio');
});
Route::get('/portifolio/atlasdehistologia', function () {
    return view('portifolio.atlasdehistologia');
});
Route::get('/portifolio/cardapiorujatai', function () {
    return view('portifolio.cardapiorujatai');
});
Route::get('/portifolio/doealimento', function () {
    return view('portifolio.doealimento');
});
Route::get('/portifolio/pedrocandiru', function () {
    return view('portifolio.pedrocandiru');
});


