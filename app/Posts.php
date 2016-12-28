<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    public function comentarios()
	{
		return $this->hasMany('App\Comentarios','on_post');
	}
}
