<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Property;
class PropertyController extends Controller
{
    public function index(){
        $property=Property::where('visible', 1)->get();
        foreach ($property as $property1) {
        $servoce=$property1->amenities;
        $property1['amenity']=$servoce;
        }
       
        return response()->json([
            'success'=>true,
            'response'=>$property
        ]);
        
    }
}
