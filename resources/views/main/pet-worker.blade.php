@extends('mainLayout')

@section('title', 'Duty dogs')
    

@section('content')


		<div class="container-fluid">
		
		<div class="main-screen-buisness">

			<!-- navbar open -->
			<nav class="navbar">
				<div class="container">
					<div class="col d-flex justify-content-between align-items-center">
						
						<a class="navbar-brand" href="/"> <img src="images/logowhite.png" alt="logo"> </a>
					
						<div class="navbar-link">
							<ul class="navbar-nav d-flex flex-row nav-links">
								<li class="nav-item"> <a class="nav-link" href="/">Main</a> </li>
								<li class="nav-item"> <a class="nav-link" href="/home-pets">Home dogs</a> </li>
								<li class="nav-item"> <a class="nav-link active-link" href="/pet-workers">Duty dogs</a> </li>
								<li class="nav-item"> <a class="nav-link" href="/gover-pets">For government structures</a> </li>
							</ul>
						</div>

						<div class="burger">
							<div class="line1"></div>
							<div class="line2"></div>
							<div class="line3"></div>
						</div>

					</div>
				</div>
			</nav>
			<!-- navbar close -->
				

			<!-- description open -->
			<div class="container description d-flex justify-content-between">	
				<div class="col-12">
					<h1 class="cursor-default">For duty dogs</h1>
					<p class="cursor-default">The solution for business on interaction of the cynologist with the duty dog</p>
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

				<div class="row d-flex justify-content-around align-items-start">
                        @foreach ($petWorker[0]->capabilities as $cap)
                            <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 flex-column d-flex justify-content-center align-items-center icon-block">
								<div class="image">
									<img src="{{asset('storage/'.$cap->icon)}}" alt="record">
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
			</div>
		</div>
	
		<!-- feedback close -->



		
		<!-- footer open -->
		<footer>
			<div class="container">
				<div class="row">
					<div class="col d-flex justify-content-between align-items-end footer-general-block">
						<div class="links d-flex">

							<div class="left-block d-flex flex-column">
								<a href="/">Main</a>
								<a href="/home-pets">Home dogs</a>
								<a href="/pet-workers">Duty dogs</a>
								<a href="/gover-pets">For government strusctures</a>
							</div>

							<div class="right-block d-flex flex-column justify-content-end mx-3">
								<h5>Voice Intercommunication</h5>
								<h5>voiceintercommunication@gmail.com</h5>
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