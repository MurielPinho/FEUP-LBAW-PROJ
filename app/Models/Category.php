<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
  // Don't add create and update timestamps in database.
  public $timestamps  = false;
  protected $table = 'category';

//   /**
//    * The user this card belongs to
//    */
 public function products() {
    return $this->hasMany('App\Models\Product');
}

  /**
   * Items inside this card
   */
}
