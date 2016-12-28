<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comentarios extends Model
{
   	// user who commented
	public function author()
	{
		return $this->belongsTo('nome');
	}
	
	public function post()
	{
		return $this->belongsTo('App\Posts','on_post');
	}
}
