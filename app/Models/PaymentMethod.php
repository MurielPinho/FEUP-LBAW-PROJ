<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PaymentMethod extends Model
{


    // Don't add create and update timestamps in database.
    public $timestamps  = false;
    protected $table = 'paymentMethod';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
        'cardNumber', 'securityCode', 'expirationDate',
    ];

    /**
     * The cards this user owns.
     */
     public function cards() {
      return $this->belongsTo('App\Models\User');
    }

 
}
