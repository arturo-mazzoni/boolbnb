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

    protected $fillable = [
      'title',
      'rooms_number',
      'beds_number',
      'bathrooms_number',
      'sqm_number',
      'address',
      'longitude',
      'latitude',
      'image',
      'visible',
      'price_per_night',
      'floor',
      'description'
    ];
}
