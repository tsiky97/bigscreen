@extends('layouts.master')

	@section('content')

		<div class="row">
			<div class="col-lg-3 menu">@include('back.partials.menu')</div>
		  	<div class="col-lg-9 col-lg-offset-3 contenu">
		  		<h1>Réponses</h1>

		  		@foreach($groupsAnswers as $groupAnswers)
		  			<table class="table">
						<thead>
						    <tr>
						    	<th scope="col">N°Question</th>
						      	<th scope="col">Enonce</th>
						      	<th scope="col">Réponse</th>
						    </tr>
						</thead>
						@foreach($groupAnswers as $answers)
						<tbody>
						    <tr>
						    	<th scope="row">{{$answers->question->id}}</th>
						      	<td>{{$answers->question->title}}</td>
						      	<td>{{$answers->answer}}</td>
						    </tr>
						</tbody>
						@endforeach
		  		@endforeach

		  	</div>
		</div>

	@endsection