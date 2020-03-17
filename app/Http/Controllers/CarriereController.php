<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarriereController extends Controller
{
		public function index() {
			return view('webpages.carriere');
		}
}
