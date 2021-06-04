<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CartProduct extends Model
{
  // Don't add create and update timestamps in database.
  public $timestamps  = false;
  protected $table = 'cartproduct';

  protected $fillable = [
    'quantity'
];


   public function buyer() {
    return $this->belongsTo('App\Models\Buyer');
  }

  public function product() {
    return $this->belongsTo('App\Models\Product');
  }
}
