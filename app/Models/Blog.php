<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
	protected $table = "blog";
	protected $fillable =
	[
		'titulo',
		'urltitulo',
		'texto',
		'descricao',
		'iframe',
		'img',
		'img2',
		'img3',
		'id_categoria'
	];

	public function categoria()
	{
		return $this->belongsTo(Categoria::class, 'id_categoria');
	}
	
	public function getRouteKeyname()
	{
		return 'urltitulo';
	}

}