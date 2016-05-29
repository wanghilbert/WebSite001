@extends('layouts.website')

@section('section')
	
	@include('contents.search')
	@include('contents.banner')

	<div class="row" id="classify">
		@include('contents.classify')
		@include('contents.hotshow')
	</div>

@endsection