<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\DashboardHome;

class DashboardHomeController extends Controller
{
    public function index(){
        return view('admin.dashboardhome.index');
    }
    
}
