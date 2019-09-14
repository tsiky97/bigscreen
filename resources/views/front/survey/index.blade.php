@extends('layouts.master')

	@section('content')

		<div class="row">

		    <div class="col align-self-center container_sondage">
		    	<img src="{{asset('images/bigscreen_logo.png')}}" class="logo" alt="Bigscreen" />
		      	<p>
		      		<b>Merci de répondre à toutes les questions et de valider le formulaire en bas de page.</b>
		      	</p>
		      	<form method="post" action="{{route('answer.store')}}">
		      		{{ csrf_field() }}
					@if ($errors->any())
					    <div class="alert alert-danger">
					        <ul>
					            @foreach ($errors->all() as $error)
					                <li>{{ $error }}</li>
					            @endforeach
					        </ul>
					    </div>
					@endif
		      		@foreach($questions as $question)
		      		<div class="card">
						<div class="card-header">
							Question {{ $question->id }}/{{$questionsCount}}
					  	</div>
					  	<div class="card-body">
						    <h5 class="card-title">{{$question->title}}</h5>
						    <p class="card-text">

							    @if($question->question_type == 'A')
								    <select name="{{ $question->id }}[answer]" class="custom-select">
								    	<option value="">Choisissez votre réponse</option>
							        	@foreach($question->choices as $choice)
							        	<option value="{{ $choice->choice }}" {{ old($question->id.'.answer')==$choice->choice? "selected" : "" }}>{{$choice->choice}}</option>
							        	@endforeach
							        </select>
							        
									@elseif ($question->question_type == 'B')
										@if($question->id == '2')
										<input type="number" class="form-control" name="{{ $question->id }}[answer]" value="{{old($question->id.'.answer')}}">
										@else
								    	<input type="text" class="form-control" name="{{ $question->id }}[answer]"   value="{{old($question->id.'.answer')}}">
								    	@endif

									@else
									@for($i = 1; $i < 6; $i++)
									<div class="form-check">
										<input type="radio" class="form-check-input" name="{{ $question->id }}[answer]" value="{{$i}}" @if($i == 1) checked @endif @if(old($question->id.'.answer')==$i) checked @endif>
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