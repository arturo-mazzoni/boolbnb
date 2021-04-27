<?php

namespace App\Http\Controllers\Guests;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GuestsController extends Controller
{
    public function search()
    {
        return view('guest.search-apartment');
    }
}
