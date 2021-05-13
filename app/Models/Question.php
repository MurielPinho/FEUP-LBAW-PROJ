<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
  // Don't add create and update timestamps in database.
  public $timestamps  = false;
  protected $table = 'question';

  /**
   * The user this card belongs to
   */
//   public function user() {
//     return $this->belongsTo('App\Models\User');
//   }

  /**
   * Items inside this card
   */
  public function product() {
    return $this->belongsTo('App\Models\Product');
  }

  public function buyer() {
    return $this->belongsTo('App\Models\Buyer');
  }

  public function answer() {
    return $this->hasMany('App\Models\Answer');
  }
}
