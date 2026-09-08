<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Privacidade extends Model
{
	protected $table = "privacidade";
	protected $fillable =
	[
		'titulo',
		'texto'
	];
}