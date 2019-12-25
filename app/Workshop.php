<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Workshop extends Model
{
  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'title', 'slug' , 'category', 'picture', 'date', 'time', 'venue'
  ];

  /**
   * Get the route key for the model.
   *
   * @return string
   */
  public function getRouteKeyName()
  {
    return 'slug';
  }
}