<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public $guarded = [];

public function attributes(){
  return $this->belongsToMany('\App\attribute');
}
public function diets(){
  return $this->belongsToMany('\App\diet');
}
public function categories(){
  return $this->belongsToMany('\App\category');
}
public function carts(){
  return $this->belongsToMany('\App\cart');
}
}
