@extends('layouts.master')

	@section('content')

		<div class="row">

		    <div class="col align-self-center container_sondage">
		    	<img src="{{asset('images/bigscreen_logo.png')}}" class="logo" alt="Bigscreen" />
		      	<p><b>Vous trouverez sur cette page toutes les réponses au sondage répondu.</b></p>
		      	@foreach($answers as $answer)
		      	<div class="card">
					<div class="card-header">
						Question {{ $answer->question_id }}/20
				  	</div>
				  	<div class="card-body">
				  		<h5 class="card-title">{{$answer->question->title}}</h5>
					    <p class="card-text">
						    {{$answer->answer}}
						</p>
					</div>
				</div>
				@endforeach
		    </div>

		</div>

	@endsection 