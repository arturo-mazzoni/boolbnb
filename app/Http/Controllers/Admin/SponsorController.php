<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Sponsor;
use Illuminate\Support\Facades\Auth;
use App\Property;

class SponsorController extends Controller
{
    public function index(){
        $id_user=Auth::id();
      $properties = Property::where('user_id', $id_user)->get();
      
      $data = ['properties' => $properties];
        return view('admin.sponsor.index', $data);
    }

    
}
