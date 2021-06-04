<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
  // Don't add create and update timestamps in database.
  public $timestamps  = false;
  protected $table = 'answer';

  /**
   * The user this card belongs to
   */
//   public function user() {
//     return $this->belongsTo('App\Models\User');
//   }

  /**
   * Items inside this card
   */
 /* public function category() {
    return $this->belongsTo('App\Models\Product');
  }*/
  public function buyer() {
    return $this->belongsTo('App\Models\Buyer');
  }

  public function question() {
    return $this->belongsTo('App\Models\Question');
  }

}
