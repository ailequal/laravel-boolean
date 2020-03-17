<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPageController extends Controller
{
		public function index() {
			return view('webpages.index');
		}

		public function corso() {
			return view('webpages.corso');
		}

		public function lezione_gratuita() {
			return view('webpages.lezione-gratuita');
		}

		public function iscriviti() {
			return view('webpages.iscriviti');
		}

		public function test() {
			return view('webpages.test');
		}
}
