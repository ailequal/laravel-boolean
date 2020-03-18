@extends('layouts.layout')

@section('main')
<div class="ex-students container">
	<h2>I nostri ex studenti su LinkedIn</h2>
	<div class="cards">
		<div class="card">
			<img src="https://www.boolean.careers/images/students/biagini.png" alt="alessandro biagini">
			<h3>Alessandro Biagini (25 anni)</h3>
			<span>Assunto da DISC SPA come web developer</span>
			<p> Da giocatore professionista di basket a sviluppatore web. 6 mesi di impegno da MVP e un memorabile tap-in
				targato Boolean hanno garantito ad Alessandro un solido futuro come web developer.</p>
			<a href="#"><img src="{{asset('img/linkedin.svg')}}" alt="linkedin"></a>
		</div>
		<div class="card">
			<img src="https://www.boolean.careers/images/students/poggini.png" alt="alessandro biagini">
			<h3>Paola Poggini (24 anni)</h3>
			<span>Assunta da Prima Assicurazioni come junior software engineer</span>
			<p>A 24 anni, dopo aver conseguito il diploma linguistico ha deciso di intraprendere fin da subito un percorso nel
				mondo Tech. Ad oggi ricopre il ruolo di Junior Software Engineer.</p>
			<a href="#"><img src="{{asset('img/linkedin.svg')}}" alt="linkedin"></a>
		</div>
		<div class="card">
			<img src="https://www.boolean.careers/images/students/masetti.png" alt="alessandro biagini">
			<h3>Loana Masetti (36 anni)</h3>
			<span>Assunta da The Zen Agency come web developer</span>
			<p>Ha scoperto la passione per l'informatica creando un blog di psicologia, ambito in cui si era specializzata
				durante gli studi. Il suo cuore però non vuol sentir ragione e Loana cambia carriera e diventa una
				ricercatissima sviluppatrice web.</p>
			<a href="#"><img src="{{asset('img/linkedin.svg')}}" alt="linkedin"></a>
		</div>
		<div class="card">
			<img src="https://www.boolean.careers/images/students/patruno.png" alt="alessandro biagini">
			<h3>Davide Patruno (29 anni)</h3>
			<span>Assunto da ArmadioVerde come web developer </span>
			<p>Dopo la laurea magistrale in scienze umanistiche e sociali, si concentra sullo sviluppo di strategie marketing.
				Decide di cambiare vita, questa volta puntando sullo sviluppo Front-End.</p>
			<a href="#"><img src="{{asset('img/linkedin.svg')}}" alt="linkedin"></a>
		</div>
	</div>

</div>
@endsection