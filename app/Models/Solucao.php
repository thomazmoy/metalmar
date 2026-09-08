<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Solucao extends Model
{
	protected $table = "solucao";
	protected $fillable =
	[
		'titulo',
		'urltitulo',
		'texto',
		'descricao',
		'descricaodois',
		'img',
		'img2',
		'img3',
		'situacao'
	];

	public function getRouteKeyname()
	{
		return 'urltitulo';
	}

}