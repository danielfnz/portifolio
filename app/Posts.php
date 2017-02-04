<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
	protected $table = 'posts';

	protected $fillable = [
        'titulo',
        'slug',
        'conteudo',
        'imagem',
        'ativo'
    ];

    public function comentarios()
	{
		return $this->hasMany('App\Comentarios','on_post');
	}

}
