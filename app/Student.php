<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
		protected $fillable = [
			'name',
			'surname',
			'phone_number',
			'date_of_birth',
			'average_vote'
		];
}
