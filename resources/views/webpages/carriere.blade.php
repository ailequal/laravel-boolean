@extends('layouts.layout')

@section('main')
<div class="students container-fluid">
	<div class="container">
		<h2>I nostri ex studenti su LinkedIn</h2>
		<div class="cards">
			@foreach ($students as $student)
			<div class="card">
				<div class="card-top">
					<img src="{{$student['img']}}" alt="alessandro biagini">
					<div class="info">
						<h3>{{$student['name']}} {{$student['surname']}} ({{$student['age']}} anni)</h3>
						<span>Assunt{{($student['gender'] === 'male' ? 'o' : 'a')}} da {{$student['working at']}} come
							{{$student['job role']}}</span>
					</div>
				</div>
				<p class="description">{{$student['description']}}</p>
				<a class="linkedin" href="#"><img src="{{asset('img/linkedin.svg')}}" alt="linkedin"></a>
			</div>
			@endforeach
		</div>
	</div>
</div>
@endsection

@section('script')
<script src="{{asset('js/app.js')}}"></script>
@endsection