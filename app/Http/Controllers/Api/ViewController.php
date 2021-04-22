<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\View;
use App\Property;

class ViewController extends Controller
{
  public function index(){
    $views = View::all();
  
    return response()->json([
        'success' => true,
        'response' => $views
    ]);    
  }
}
