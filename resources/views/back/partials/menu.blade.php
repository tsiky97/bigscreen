<ul class="nav flex-column text-center text-dark">
	<li class="nav-item">
		<img src="{{asset('images/bigscreen_logo.png')}}" class="logo_back" alt="Bigscreen" />
	</li>
	<li class="nav-item">
    	<a class="nav-link active" href="{{route('administration.index')}}">Accueil</a>
  	</li>
  	<li class="nav-item">
    	<a class="nav-link" href="{{route('administration.questions')}}">Questionnaire</a>
  	</li>
  	<li class="nav-item">
    	<a class="nav-link" href="{{route('administration.answers')}}">Réponses</a>
  	</li>
</ul>