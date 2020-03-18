@extends('layouts.layout')

@section('main')
<div class="container">
	<h2>test</h2>

	{{-- @dd(asset('css/style.css')) --}}
	@dd(Request::route()->getName() == 'static_page.test') ? 'active' : '')
	{{-- {{Request::route()->getName() == 'static_page.test') ? 'active' : ''}} --}}

	{{-- @dd(Request::route()) --}}

	<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Doloremque quod sunt ipsam voluptatibus eius voluptate
		impedit molestias ex hic nihil ratione laborum sapiente veritatis ad eligendi rerum, illum, dolore placeat?</p>
</div>
@endsection