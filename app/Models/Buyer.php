<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;


class Buyer extends Authenticatable
{
	use Notifiable;



	// Don't add create and update timestamps in database.
	public $timestamps  = false;
	protected $table = 'buyer';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
	    'name', 'email', 'phonenumber' , 'password', 'isadmin'
	];

	/**
	 * The attributes that should be hidden for arrays.
	 *
	 * @var array
	 */
	protected $hidden = [
	    'password', 'remember_token',
	];


}
