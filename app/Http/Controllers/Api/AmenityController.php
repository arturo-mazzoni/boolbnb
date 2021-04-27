<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Amenity;
use App\Property;

class AmenityController extends Controller
{
    public function index(){
        $amenity=Amenity::all();
       
        return response()->json([
            'success'=>true,
            'response'=>$amenity
        ]);
        
    }
}
