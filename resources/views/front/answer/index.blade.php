@extends('layouts.master')

	@section('content')

		<div class="row">

		    <div class="col align-self-center container_sondage">
		    	<img src="{{asset('images/bigscreen_logo.png')}}" class="logo" alt="Bigscreen" />
		      	<p class="text-center">
		      		Toute l’équipe de <strong>Bigscreen</strong> vous remercie pour votre engagement. Grâce à votre investissement, nous vous préparons une application toujours plus facile à utiliser, seul ou en famille. Si vous désirez consulter vos réponse ultérieurement, vous pouvez consultez cette adresse: <a href="http://localhost:8000/answer/user/{{ session()->get('randomText') }}">http://localhost:8000/answer/user/{{ session()->get('randomText') }}</a>
		      	</p>
		    </div>

		</div>

	@endsection 