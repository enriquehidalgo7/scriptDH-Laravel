<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Accesorie extends Model
{
  use SoftDeletes;

  protected $fillable = [
      'name', 'price', 'units', 'description', 'images'
  ];

  protected $dates = ['deleted_at'];

  public function product()
  {
      return $this->belongsTo(Product::class, 'product_id');
  }

  public function orders()
  {
      return $this->hasMany(Order::class);
  }

}
