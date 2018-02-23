<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Request;

class HomeController extends Controller{
	public function inicio()
    {
        return view('home.home');
    }
}