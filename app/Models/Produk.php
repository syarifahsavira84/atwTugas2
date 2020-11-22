<?php 

namespace App\Models;

use App\User;

class Produk extends Model{
	protected $table = 'produk';

	function seller(){
		return $this->belongsTo(User::class, 'id_user');
	}
}