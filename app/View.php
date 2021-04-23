<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class View extends Model
{
    public function property()
    {
    return $this->belongsTo('App\Property');
    }

    protected $fillable = [
      'property_id',
      'date'
    ];
}
