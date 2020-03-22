@php
// dd(asset(''));
// redirect()->route('static_page.index');
var_dump(env('APP_NAME'));
var_dump(env('APP_KEY'));
die();
@endphp

@extends('layouts.layout')

@section('main')
<div class="container">
	<h2>test</h2>
	<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Doloremque quod sunt ipsam voluptatibus eius voluptate
		impedit molestias ex hic nihil ratione laborum sapiente veritatis ad eligendi rerum, illum, dolore placeat?</p>
</div>
@endsection