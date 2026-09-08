<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Siteconfig extends Model
{
	protected $table = "siteconfig";
	protected $fillable =
	[
		'nomesite',
		'descricao',
		'palavraschave',
		'endereco',
		'email',
		'celular',
		'telefone',
		'linkendereco',
		'iframemapa',
		'facebook',
		'instagram',
		'whatsapp',
		'twitter',
		'linkedin',
		'youtube',
		'facebookid',
		'taghead',
		'codchat',
		'logobranca',
		'logoescura',
		'favicon'
	];
}