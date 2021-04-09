<?php

namespace App;

/* use App\Property; */
use Illuminate\Database\Eloquent\Model;

class Amenity extends Model
{
  public function properties()
    {
    return $this->belongsToMany('App\Property');
    }
}
