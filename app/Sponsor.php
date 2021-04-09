<?php

namespace App;

/* use App\Property; */
use Illuminate\Database\Eloquent\Model;

class Sponsor extends Model
{
  public function properties()
    {
    return $this->belongsToMany('App\Property');
    }
}
