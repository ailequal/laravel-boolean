<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CarriereController extends Controller
{
		public function gender(Request $request) {
			// request all post data that was sent
			$data = $request->all();

			// check that data contains gender value
			if (array_key_exists('gender', $data)) {
				$genderSelect = $data['gender'];
			} else {
				$error = 'Wrong selection';
				return response()->json($error, 200);
			}

			// store the variables from config
			$students = config('students.students');
			$genders = config('students.genders');

			// check matching gender with selection
			if ($genderSelect === $genders[0] || $genderSelect === $genders[1] || $genderSelect === 'all') {
				// cycle through every single student
				$studentsFilter = [];
				foreach ($students as $key => $student) {
					// check that the data arrived match a gender
					if ($genderSelect === $student['gender']) {
						// return male students
						$studentsFilter[] = $student;
					} elseif ($genderSelect === $student['gender']) {
						// return female students
						$studentsFilter[] = $student;
					} elseif ($genderSelect === 'all') {
						// return all students
						$studentsFilter[] = $student;
					}
				}
				return response()->json($studentsFilter, 200);
			} else {
				// if gender doesn't match throw an error
				$error = 'Wrong selection';
				return response()->json($error, 200);
			}
		}
}
