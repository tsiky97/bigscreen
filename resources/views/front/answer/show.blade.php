@extends('layouts.master')

	@section('content')

		<div class="row">

		    <div class="col align-self-center container_sondage">
		    	<img src="{{asset('images/bigscreen_logo.png')}}" class="logo" alt="Bigscreen" />
		      	<p><b>Vous trouverez ci-dessous les réponses que vous avez apporté à notre sondage le {{$displayTime}}.</b></p>
		      	@foreach($answers as $answer)
		      	<div class="card">
					<div class="card-header">
						Question {{ $answer->question_id }}/{{$answersCount}}
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