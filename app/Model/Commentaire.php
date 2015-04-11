<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Commentaire extends Model {

	protected $table = 'commentaires';
	public $timestamps = true;

	public function user()
	{
		return $this->belongsTo('App\Model\User');
	}

	public function covoiturage()
	{
		return $this->belongsTo('App\Model\Covoiturage');
	}

}