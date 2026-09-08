<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
	protected $table = "categoria";
	protected $fillable =
	[
		'nome'
	];

	public function blog()
	{
		return $this->hasMany('App\Models\Blog', 'id', 'id_categoria');
	}

}