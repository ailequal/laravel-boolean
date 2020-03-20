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

		public function show($slug) {
			// store the array of students inside a variable
			$students = $this->data['students'];
			// search every student for a matching slug
			$find = false;
			foreach ($students as $key => $student) {
				if ($slug === $student['slug']) {
					$studentKey = $key;
					$find = true;
				}
			}

			// check if the studentKey has been filled
			if ($find) {
				$student = $students[$studentKey];
				return view('webpages.studente', compact('student'));
			} else {
				abort('404');
			}
		}

		public function test() {
			return view('webpages.test', $this->data);
		}

}
