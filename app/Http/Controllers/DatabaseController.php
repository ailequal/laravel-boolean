<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DatabaseController extends Controller
{
		// private $data;
		public function __construct() {
			$this->data = App\Student::all();
		}
		public function students() {
			return view('webpages.students', $this->data);
		}
}
