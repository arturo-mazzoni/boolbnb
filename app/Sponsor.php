<?php

namespace App;

/* use App\Property; */
use Illuminate\Database\Eloquent\Model;


class Sponsor extends Model
{
  protected $fillable = [
        'name_package',
        'duration',
        'price'
    ];

  public function properties()
    {
    return $this->belongsToMany('App\Property')->withPivot('end');
    }
}
