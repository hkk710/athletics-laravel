<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class WebteamController extends Controller
{
    public function index() {
    	return view('webteam/index');
    }
}
