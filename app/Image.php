<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable = [
        'property_id',
        'image',
      
      ];  
    public function property()
    {//asd
    return $this->belongsTo('App\Property');
    }
}
