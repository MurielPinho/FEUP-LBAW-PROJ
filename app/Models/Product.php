<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
  // Don't add create and update timestamps in database.
  public $timestamps  = false;
  protected $table = 'product';

  protected $fillable = [
    'name', 'price', 'description' , 'category'
];
  public function category() {
    return $this->belongsTo('App\Models\Category');
  }

  public function review() {
    return $this->hasMany('App\Models\Review');
  }

  public function question() {
    return $this->hasMany('App\Models\Question');
  }


}
