@extends('layouts.layout')

@section('main')
<div class="students container-fluid">
	<div class="container">
		<h2>I nostri ex studenti su LinkedIn</h2>
		<div class="filter">
			<select name="filter" id="filter">
				<option value="all">Tutti</option>
				@foreach ($genders as $gender)
				<option value="{{$gender}}">{{($gender === 'male') ? 'Uomo' : 'Donna'}}</option>
				@endforeach
			</select>
		</div>
		<div class="cards">
			@foreach ($students as $key => $student)
			<div class="card">
				<div class="card-top">
					<img src="{{$student['img']}}" alt="alessandro biagini">
					<div class="info">
						<a href="{{route('carriere.show', $student['slug'])}}">
							<h3>{{$student['name']}} {{$student['surname']}} ({{$student['age']}} anni)</h3>
						</a>
						<span>Assunt{{($student['gender'] === 'male' ? 'o' : 'a')}} da {{$student['working at']}} come
							{{$student['job role']}}</span>
					</div>
				</div>
				<p class="description">{{$student['description']}}</p>
				<a class="linkedin" href="#"><i class="fab fa-linkedin"></i></i></a>
			</div>
			@endforeach
		</div>
	</div>
</div>
@endsection

@section('script')
<script id="template" type="text/x-handlebars-template">
	<div class="card">
		<div class="card-top">
			<img src="@{{img}}" alt="alessandro biagini">
			<div class="info">
				<a href="{{route('carriere.show', '')}}/@{{slug}}">
					<h3>@{{name}} @{{surname}} (@{{age}} anni)</h3>
				</a>
				<span>@{{hired}} da @{{working_at}} come
					@{{job_role}}</span>
			</div>
		</div>
		<p class="description">@{{description}}</p>
		<a class="linkedin" href="#"><i class="fab fa-linkedin"></i></i></a>
	</div>
</script>
<script src="{{asset('js/app.js')}}"></script>
@endsection