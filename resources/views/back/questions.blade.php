@extends('layouts.master')

	@section('content')

		<div class="row">
			<div class="col-lg-3 menu">@include('back.partials.menu')</div>
		  	<div class="col-lg-9 col-lg-offset-3 contenu">
		  		<h1>Questions</h1>
		  		<table class="table">
					<thead>
					    <tr>
					    	<th scope="col">N°</th>
					      	<th scope="col">Enonce</th>
					      	<th scope="col">Type de question</th>
					    </tr>
					</thead>
					<tbody>
						@forelse($questions as $question)
					    <tr>
					    	<th scope="row">{{$question->id}}</th>
					      	<td>{{$question->title}}</td>
					      	<td>{{$question->question_type}}</td>
					    </tr>
					    @empty
					    Aucune question
					    @endforelse
					</tbody>
				</table>
		  	</div>
		</div>

	@endsection