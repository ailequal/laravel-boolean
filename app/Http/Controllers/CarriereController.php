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

		public function show($id) {
			if (!array_key_exists($id, $this->data['students'])) {
				abort('404');
			} else {
				$student = $this->data['students'][$id];
			return view('webpages.studente', compact('student'));
			}
		}

		public function test() {
			return view('webpages.test', $this->data);
		}

}
