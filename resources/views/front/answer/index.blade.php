@extends('layouts.master')

	@section('content')

		<div class="row">

		    <div class="col align-self-center container_sondage">
		    	<img src="{{asset('images/bigscreen_logo.png')}}" class="logo" alt="Bigscreen" />
		      	<p class="text-center">
		      		<b>
		      			Toute l’équipe de Bigscreen vous remercie pour votre engagement. Grâce à votre investissement, nous vous préparons une application toujours plus facile à utiliser, seul ou en famille. Si vous désirez consulter vos réponse ultérieurement, vous pouvez consultez cette adresse: <a href="http://localhost:8000/answer/user/{{ session()->get('randomText') }}">http://localhost:8000/answer/user/{{ session()->get('randomText') }}</a>
		      		</b>
		      	</p>
		    </div>

		</div>

	@endsection 