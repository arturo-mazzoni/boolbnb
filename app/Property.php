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

  public function users()
  {
  return $this->belongsTo('App\User');
  }

  public function messages()
  {
  return $this->hasMany('App\Message');
  }

  public function views()
  {
  return $this->hasMany('App\View');
  }

  public function images()
  {
  return $this->hasMany('App\Image');
  }


    protected $fillable = [
      'user_id',
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
