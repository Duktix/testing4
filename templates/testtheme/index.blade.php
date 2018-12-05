@extends('layouts.builder')

@section('styles')
<link href='https://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
<link href="{{ IncludeAsset('css/bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ IncludeAsset('css/owl.carousel.css') }}" rel="stylesheet">
<link href="{{ IncludeAsset('css/owl.theme.default.min.css') }}" rel="stylesheet">
<link href="{{ IncludeAsset('css/font-awesome.min.css') }}" rel="stylesheet">
<link href="{{ IncludeAsset('snippets-assets/minimalist-basic/content-bootstrap.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ IncludeAsset('css/style.css') }}" rel="stylesheet">
<style>
@if($preview)
	@include('templates.'.$theme.'.customcss')
@endif
</style>
@endsection

@section('header')

@if($preview)
	@include('templates.'.$theme.'.header')
@endif

@endsection
@section('wrapper')
   
<div class="row">
	<div class="col-md-6">
		<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus leo ante, consectetur sit amet vulputate vel, dapibus sit amet lectus.</p>
	</div>
	<div class="col-md-6">
		<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus leo ante, consectetur sit amet vulputate vel, dapibus sit amet lectus.</p>
	</div>
</div>
				
@endsection
@section('footer')

        @include('templates.'.$theme.'.footer')
		
@endsection