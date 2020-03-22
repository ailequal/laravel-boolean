<?php

namespace App\Http\Controllers;
use App\Student;
use Illuminate\Http\Request;

class DatabaseController extends Controller
{
		private $data;
		private $studentOne;
		private $studentTwo;

		public function __construct() {
			$this->data = Student::all();
			dd($this->data);
		}

		public function students() {
			return view('webpages.students', $this->data);
		}
}
