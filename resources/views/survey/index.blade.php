@extends('layouts.master')

	@section('content')

		<div class="row">

		    <div class="col align-self-center container_sondage">
		    	<img src="{{asset('images/bigscreen_logo.png')}}" class="logo" alt="Bigscreen" />
		      	<p><b>Merci de répondre à toutes les questions et de valider le formulaire en bas de page.</b></p>
		      	<form method="post" action="{{route('answer.store')}}">
		      		{{ csrf_field() }}
		      		@foreach($questions as $question)
		      		<div class="card">
						<div class="card-header">
							Question {{ $question->id }}/{{$questionsCount}}
					  	</div>
					  	<div class="card-body">
						    <h5 class="card-title">{{$question->title}}</h5>
						    <p class="card-text">
							    @if($question->question_type == 'A')
								    <select name="{{ $question->id }}[answer]" class="custom-select" required>
							        	<option selected>Choisissez votre réponse</option>
							        	@foreach($question->choices as $choice)
							        	<option value="{{ $choice->choice }}">{{$choice->choice}}</option>
							        	@endforeach
							        </select>
									@elseif ($question->question_type == 'B')
										@if($question->id == '1')
										<input type="email" class="form-control" name="{{ $question->id }}[answer]" required>
										@elseif($question->id == '2')
										<input type="number" class="form-control" name="{{ $question->id }}[answer]" required>
										@else
								    	<input type="text" class="form-control" name="{{ $question->id }}[answer]" required>
								    	@endif
									@else
									@for($i = 1; $i < 6; $i++)
									<div class="form-check">
							        	<input type="radio" class="form-check-input" name="{{ $question->id }}[answer]" required value="{{$i}}">
										<label class="form-check-label" for="{{$i}}">
								        	{{$i}}
								        </label>
							        </div>
									@endfor
								@endif
							</p>
						</div>
					</div>
				@endforeach
				<button type="submit" class="btn btn-primary">Finaliser</button>
				</form>
		    </div>

		</div>

	@endsection 