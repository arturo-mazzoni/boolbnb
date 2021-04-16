<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Sponsor;

class SponsorController extends Controller
{
    public function index(){
        return view('admin.sponsor.index');
    }
}
