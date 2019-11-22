@extends('mainLayout')

@section('title', 'Home dogs')
    

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
								<li class="nav-item"> <a class="nav-link" href="/">Main</a> </li>
								<li class="nav-item"> <a class="nav-link active-link" href="/home-pets">Home dogs</a> </li>
								<li class="nav-item"> <a class="nav-link" href="/pet-workers">Duty dogs</a> </li>
								<li class="nav-item"> <a class="nav-link" href="/gover-pets">For government structures</a> </li>
							</ul>
						</div>

					</div>
				</div>
			</nav>
			<!-- navbar close -->
				

			<!-- description open -->
			<div class="container description d-flex justify-content-between">	
				<div class="col-9">
					<h1 class="cursor-default">For home dogs</h1>
					<p class="cursor-default">The voice-intercommunication complex is created special for your home pets</p>
					<a class="anchor" href="#feedback"> <button >Contact us</button> </a>
				</div>
			</div>
			<!-- description close -->
		</div>		


		<!-- opportunities open -->
		<div class="opportunities text-center">
			<div class="container">
				<h2>Capabilities</h2>
				<h3>What can the complex do?</h3>
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
		<div id="feedback" class="feedback text-center">
			<div class="container">
				<h2>Feed back</h2>
				<h3>Leave your email down below, so we can contact you</h3>
                <form method="POST" action="/send-mail">
                    {{ csrf_field() }}
					<input type="email" required placeholder="example@gmail.com" name="mail">
					<button type="submit">Send</button>
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
								<a href="/">Main</a>
								<a href="/home-pets">Home dogs</a>
								<a href="/pet-workers">Duty dogs</a>
								<a href="/gover-pets">For government strusctures</a>
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