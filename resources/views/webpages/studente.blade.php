@extends('layouts.layout')

@section('main')
<div class="students container-fluid">
	<div class="container">
		<h2>Uno dei nostri ex studenti su LinkedIn</h2>
		<div class="cards">
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
				<a class="linkedin" href="#"><i class="fab fa-linkedin"></i></i></a>
			</div>
		</div>
	</div>
</div>
@endsection

@section('script')
<script src="{{asset('js/app.js')}}"></script>
@endsection