<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Property;
class PropertyController extends Controller
{
    public function index(){
        $property=Property::all();
       
        return response()->json([
            'success'=>true,
            'response'=>$property
        ]);
        
    }
}
