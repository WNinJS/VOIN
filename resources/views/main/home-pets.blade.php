@extends('mainLayout')

@section('title', 'Домашние собаки')
    

@section('content')

<div class="container-fluid">
		
		<div class="main-screen-home">

			<!-- navbar open -->
			<nav class="navbar">
				<div class="container">
					<div class="col d-flex justify-content-between align-items-center">
						
						<a class="navbar-brand" href="index.html"> <img src="images/logowhite.png" alt="logo"> </a>
					
						<div class="navbar-link">
							<ul class="navbar-nav d-flex flex-row">
								<li class="nav-item"> <a class="nav-link" href="/">Главная</a> </li>
								<li class="nav-item"> <a class="nav-link active-link" href="#">Для домашних</a> </li>
								<li class="nav-item"> <a class="nav-link" href="/pet-workers">Для служебных</a> </li>
								<li class="nav-item"> <a class="nav-link" href="/gover-pets">Для государственных структур</a> </li>
							</ul>
						</div>

					</div>
				</div>
			</nav>
			<!-- navbar close -->
				

			<!-- description open -->
			<div class="container description d-flex justify-content-between">	
				<div class="col-9">
					<h1 class="cursor-default">Для домашних собак</h1>
					<p class="cursor-default">Специально для ваших питомцев разработан комплекс голосового взаимодействия</p>
					<button>Связаться</button>
				</div>
			</div>
			<!-- description close -->
		</div>		


		<!-- opportunities open -->
		<div class="opportunities text-center">
			<div class="container">
				<h2>Возможности</h2>
				<h3>Что может комплекс?</h3>
				<div class="row d-flex justify-content-around align-items-center">
                    @foreach ($homeCap[0]->capabilities as $cap)
                        <div class="col-4 flex-column d-flex justify-content-center align-items-center">
							<div class="image">
								<img src="{{asset('storage/'.$cap->icon)}}" alt="voice">
							</div>
                            
                            <p>{{$cap->desc}}</p>
                        </div>
                    @endforeach
					<hr>
				</div>
			</div>
		</div>
		<!-- opportunities close -->





		<!-- feedback open -->
		<div class="feedback text-center">
			<div class="container">
				<h2>Обратная связь</h2>
				<h3>Оставьте свою почту и с вами свяжутся</h3>
                <form method="POST" action="/send-mail">
                    {{ csrf_field() }}
					<input type="email" required placeholder="example@gmail.com" name="mail">
					<button type="submit">Отправить</button>
				</form>
				<hr>
			</div>
		</div>
	
		<!-- feedback close -->







		
		<!-- footer open -->
		<footer>
			<div class="container">
				<div class="row">
					<div class="col d-flex justify-content-between align-items-end">
						<div class="links d-flex">

							<div class="left-block d-flex flex-column">
								<a href="/">Главная</a>
								<a href="/home-pets">Для домашних</a>
								<a href="/pet-workers">Для служебных</a>
								<a href="/gover-pets">Для государственных структур</a>
							</div>

							<div class="right-block d-flex flex-column justify-content-end mx-3">
								<h5>Voice Intercommunication</h5>
								<h5>eduardkarimov.rb@gmail.com</h5>
							</div>
						</div>

						<div class="social-media">
							<a href="https://vk.com/edvardkarimov96"><img src="images/whitevk.png" alt="vk"></a>
							<a href="https://www.facebook.com/woody.jakson"><img src="images/whitefacebook.png" alt="facebook"></a>
							<a href="http://instagram.com/mrVol1/"><img src="images/whiteinst.png" alt="instagram"></a>
						</div>
					</div>
				</div>
			</div>
		</footer>
		<!-- footer close -->

	</div>

	
@endsection