<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Depoimento extends Model
{
	protected $table = "depoimento";
	protected $fillable =
	[
		'nome',
		'cargo',
		'texto',
		'img'
	];
}