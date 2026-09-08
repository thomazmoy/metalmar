<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Quemsomos extends Model
{
	protected $table = "quemsomos";
	protected $fillable =
	[
		'tituloum',
		'titulodois',
		'titulotres',
		'textoum',
		'textodois',
		'textotres',
		'iframevideo',
		'imgum',
		'imgdois',
		'imgtres'
	];
}