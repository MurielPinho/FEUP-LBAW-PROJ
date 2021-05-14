<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CartProduct extends Model
{
  // Don't add create and update timestamps in database.
  public $timestamps  = false;
  protected $table = 'cartproduct';

  /**
   * The user this card belongs to
   */
//   public function user() {
//     return $this->belongsTo('App\Models\User');
//   }

  /**
   * Items inside this card
   */
//   public function items() {
//     return $this->hasMany('App\Models\Item');
//   }
}
