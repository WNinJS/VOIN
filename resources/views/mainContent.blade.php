@extends('mainLayout')

@section('content')

@section('title', 'Main')

<div class="container-fluid">
		
		<div class="main-screen">

			<!-- navbar open -->
			@include('partials.header')
			<!-- navbar close -->
				

			<!-- description open -->
			<div class="container description d-flex justify-content-between">	
				<div class="col-11">
					<h1 class="cursor-default">Monitoring and communication complex for dogs</h1>
					<p class="cursor-default">Voice communication providing between you and your dog, biometric index condition and location tracking of it, first-person (POV) photofixacion  and video recording, possibility of pre-recorded commands sending.</p>
					<a class="anchor" href="#see-more"> <button >See more</button> </a>
				</div>

				<div class="col-1 p-0 d-flex justify-content-end align-items-end">
					<div class="social-media d-flex flex-column justify-content-end">
						<a target="_blank" href="https://vk.com/edvardkarimov96"><img src="images/whitevk.png" alt="vk"></a>
						<a target="_blank" href="https://www.facebook.com/woody.jakson"><img src="images/whitefacebook.png" alt="facebook"></a>
						<a target="_blank" href="http://instagram.com/mrVol1/"><img src="images/whiteinst.png" alt="instagram"></a>
					</div>
				</div>
			</div>
			<!-- description close -->


		</div>		


		<!-- complex open -->
		<div id="see-more" class="complex text-center">
			<div class="container">
				<h2>Modules</h2>
				<h3>Description of the main complex's parts</h3>
				<div class="row">

					@foreach ($complexes as $complex)
						<div class="first-left col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 ">
							<img src="{{asset('storage/'. $complex->img)}}" alt="{{$complex->name}}">
							<h4>{{$complex->name}}</h4>
							{{-- <button>Подробнее</button> --}}
							<button data-toggle="modal" data-target="#complex-modal-{{$complex->id}}">See more</button>
						</div>
					@endforeach

					<hr class="complex-hr">
					
				</div>
			</div>
		</div>
		<!-- complex close -->








		<!-- directions open -->
		<div class="directions text-center">
			<div class="container">
				<h2>Directions of work</h2>
				<h3>The directions of work</h3>
				<div class="row justify-content-around">

					<div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
						<div class="third-block">
							<img src="images/homedogs.jpg" alt="homedogs">
							<h4>Home dogs</h4>
							<a href="/home-pets">See more</a>
						</div>
					</div>

					<div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
						<div class="third-block">
							<img src="images/buisnessdogs.jpg" alt="buisnessdogs">
							<h4>Duty dogs</h4>
							<a href="/pet-workers">See more</a>
						</div>
					</div>

					<div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
						<div class="third-block">
							<img src="images/wardogs.jpg" alt="wardogs">
							<h4>Government structures</h4>
							<a href="/gover-pets">See more</a>
						</div>
					</div>
				</div>
			</div>
		</div>	
		<!-- directions close -->




		
		<!-- footer open -->
		<footer>
			<div class="container">
				<div class="row">
					<div class="col d-flex justify-content-between align-items-end footer-general-block">
						<div class="links d-flex">

							<div class="left-block d-flex flex-column">
								<a href="#">Main</a>
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


	<!-- complex modal open -->
	@foreach ($complexes as $complex)
		<div class="modal fade" id="complex-modal-{{$complex->id}}" tabindex="-1" role="dialog" aria-labelledby="complex-modalLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="complex-modalLabel">{{$complex->name}}</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<p>{{$complex->description}}</p>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div>
	@endforeach



		
	<!-- MAIN SCREEEN OPEN -->

		<!-- FOOTER CLOSE -->

	
@endsection