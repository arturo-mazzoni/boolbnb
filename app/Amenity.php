<?php

namespace App;

/* use App\Property; */
use Illuminate\Database\Eloquent\Model;

class Amenity extends Model
{
  protected $fillable = [
    'service',
];

  public function properties()
    {
    return $this->belongsToMany('App\Property');
    }
}
