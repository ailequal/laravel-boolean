<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarriereController extends Controller
{

		private $data;

		public function __construct() {
			$this->data = config('students');
		}

		public function index() {
			return view('webpages.carriere', $this->data);
		}

		public function test() {
			return view('webpages.test', $this->data);
		}

}
