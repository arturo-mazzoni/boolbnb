<?php

namespace App;

/* use App\Amenity;
use App\Sponsor; */
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
  public function amenities()
    {
    return $this->belongsToMany('App\Amenity');
    }

    public function sponsors()
    {
    return $this->belongsToMany('App\Sponsor');
    }
}
