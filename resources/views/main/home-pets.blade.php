@extends('mainLayout')

@section('title', 'Home dogs')
    

@section('content')

<div class="container-fluid">
		
		<div class="main-screen-home">

			<!-- navbar open -->
			<nav class="navbar">
				<div class="container h-100">
					<div class="col d-flex justify-content-between align-items-center h-100">
						
						<a class="navbar-brand" href="/"> <img src="images/logowhite.png" alt="logo"> </a>
					
						<div class="navbar-link">
							<ul class="navbar-nav d-flex flex-row nav-links">
								<li class="nav-item"> <a class="nav-link" href="/">Main</a> </li>
								<li class="nav-item"> <a class="nav-link" href="">About Us</a> </li>
								<li class="nav-item"> <a class="nav-link" href="">Materials</a> </li>
								<li class="nav-item"> <a class="nav-link active-link" href="/home-pets">Home dogs</a> </li>
								<li class="nav-item"> <a class="nav-link" href="/pet-workers">Duty dogs</a> </li>
								<li class="nav-item"> <a class="nav-link" href="/gover-pets">Government structures</a> </li>
								<div class="signin-signup d-flex justify-content-center align-items-center">
									<li class="d-flex justify-content-center align-items-center"> <a class="login-icon" href=""></a> </li>
									<li class="nav-item signup-text"><a class="nav-link" href="">Not account?</a></li>
								</div>
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
					<h1 class="cursor-default">Home dogs</h1>
					<p class="cursor-default">Created specially for your home pets</p>
					<a class="anchor" href="#feedback"> <button >Contact us</button> </a>
				</div>
			</div>
			<!-- description close -->
		</div>		


		<!-- opportunities open -->
		<div class="opportunities text-center">
			<div class="container">
				<h2>Opportunities</h2>
				<h3>The Voin complex provides</h3>
				<div class="row d-flex justify-content-around align-items-start">
                    @foreach ($homeCap[0]->capabilities as $cap)
                        <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 flex-column d-flex justify-content-center align-items-center icon-block">
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
				<h3>Leave your email below, we will contact you</h3>
                <form method="POST">
					{{ csrf_field() }}
					<input type="email" required placeholder="example@gmail.com" name="mail" class="mail">
					<button type="submit" class="btn-submit">Send</button>
				</form>
				<h2 class="text-center msg" style="display: none">Your email has been successfuly sent!</h2>
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
								<a href="#">About Us</a>
								<a href="#">Materials</a>
								<a href="/home-pets">Home dogs</a>
								<a href="/pet-workers">Duty dogs</a>
								<a href="/gover-pets">Government structures</a>
							</div>

							<div class="right-block d-flex flex-column justify-content-end mx-3">
								<h5>ask@vo-in.com</h5>
								<h5>info@vo-in.com</h5>
								<h5>nda@vo-in.com</h5>
								<h5>support@vo-in.com</h5>
								<h5>Voice Intercommunication</h5>
							</div>
						</div>

						<div class="social-media">
							<a target="_blank" href="https://vk.com/edvardkarimov96"><img src="images/whitevk.png" alt="vk"></a>
							<a target="_blank" href="https://www.facebook.com/woody.jakson"><img src="images/whitefacebook.png" alt="facebook"></a>
							<a target="_blank" href="http://instagram.com/mrVol1/"><img src="images/whiteinst.png" alt="instagram"></a>
						</div>
					</div>
				</div>
			</div>
		</footer>
		<!-- footer close -->

	</div>


	
@endsection