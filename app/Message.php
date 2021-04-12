<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    public function properties()
    {
    return $this->belongsTo('App\Property');
    }
}
