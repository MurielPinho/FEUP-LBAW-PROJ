<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{

    // Don't add create and update timestamps in database.
    public $timestamps  = false;
    protected $table = 'address';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'city', 'postalcard', 'door', 'address',
    ];

    /**
     * The cards this user owns.
     */
     public function user() {
      return $this->belongsTo('App\Models\User');
    }

 
}
