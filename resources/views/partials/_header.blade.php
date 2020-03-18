<div class="container">
	<div class="nav-bar">
		<nav class="nav-left">
			<ul>
				<li class="logo">
					<a href="{{route('static_page.index')}}"><img src="{{asset('img/logo-color.png')}}" alt="boolean"></a>
				</li>
			</ul>
		</nav>
		<nav class="nav-right">
			<ul>
				<li class="{{(Request::route()->getName() == 'static_page.index') ? 'active' : ''}}"><a
						href="{{route('static_page.index')}}">HOME</a></li>
				<li class="{{(Request::route()->getName() == 'static_page.corso') ? 'active' : ''}}"><a
						href="{{route('static_page.corso')}}">CORSO</a></li>
				<li class="{{(Request::route()->getName() == 'carriere.index') ? 'active' : ''}}"><a
						href="{{route('carriere.index')}}">DOPO
						IL
						CORSO</a>
				</li>
				<li class="{{(Request::route()->getName() == 'static_page.lezione-gratuita') ? 'active' : ''}}"><a
						href="{{route('static_page.lezione-gratuita')}}">LEZIONE
						GRATUITA</a></li>
				<li class="apply {{(Request::route()->getName() == 'static_page.iscriviti') ? 'active' : ''}}"><a
						href="{{route('static_page.iscriviti')}}">CANDIDATI
						ORA</a></li>
				<li class="hamburger"><a href="#"><i class="fas fa-bars"></i></a></li>
			</ul>
		</nav>
	</div>
</div>