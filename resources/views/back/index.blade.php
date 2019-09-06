@extends('layouts.master')

	@section('content')

		<div class="row">
			<div class="col-lg-3 menu">@include('back.partials.menu')</div>
		  	<div class="col-lg-9 col-lg-offset-3 contenu">
		  		<h1>Statistiques</h1>
		  		<div class="row">
				    <div class="col">
				    	{!! $chartjs6->render() !!}
		  			</div>
				    <div class="col">
				    	{!! $chartjs7->render() !!}
		  			</div>
				    <div class="w-100"></div>
				    <div class="col">
				    	{!! $chartjs8->render() !!}
				    </div>
				    <div class="col">
				    	{!! $chartjs115->render() !!}
				    </div>
				</div>
		  	</div>
		</div>

	@endsection