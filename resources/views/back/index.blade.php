@extends('layouts.master')

	@section('content')

		<div class="row">
			<div class="col-lg-3 menu">@include('back.partials.menu')</div>
		  	<div class="col-lg-9 col-lg-offset-3 contenu">
		  		<h1>Statistiques</h1>
		  		<div class="row">
				    <div class="col">
				    	Question 6
		  				<canvas id="myChart6"></canvas>
		  			</div>
				    <div class="col">Column</div>
				    <div class="w-100"></div>
				    <div class="col">Column</div>
				    <div class="col">Column</div>
				</div>
		  	</div>
		</div>

	@endsection