@extends('mainLayout')

@section('content')

@section('title', 'Главная')

<div class="container-fluid">
		
		<div class="main-screen">

			<!-- navbar open -->
			@include('partials.header')
			<!-- navbar close -->
				

			<!-- description open -->
			<div class="container description d-flex justify-content-between">	
				<div class="col-11">
					<h1 class="cursor-default">Комплекс голосового взаимодействия для собак</h1>
					<p class="cursor-default">Комплекс обеспечивает голосове взаимодействие вас и вашей собаки, позволяет отслеживать ее физическое состояние, местоположение и действия вокруг животного</p>
					<a class="anchor" href="#see-more"> <button >Подробнее</button> </a>
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
				<h2>Модули</h2>
				<h3>Описание основных частей комплекса</h3>
				<div class="row">

					@foreach ($complexes as $complex)
						<div class="first-left col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 ">
							<img src="{{asset('storage/'. $complex->img)}}" alt="{{$complex->name}}">
							<h4>{{$complex->name}}</h4>
							{{-- <button>Подробнее</button> --}}
							<button data-toggle="modal" data-target="#complex-modal-{{$complex->id}}">Подробнее</button>
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
				<h2>Направления работы</h2>
				<h3>Направления с которыми мы работаем</h3>
				<div class="row justify-content-around">

					<div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
						<div class="third-block">
							<img src="images/homedogs.jpg" alt="homedogs">
							<h4>Домашние собаки</h4>
							<a href="/home-pets">Подробнее</a>
						</div>
					</div>

					<div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
						<div class="third-block">
							<img src="images/buisnessdogs.jpg" alt="buisnessdogs">
							<h4>Военные собаки</h4>
							<a href="/pet-workers">Подробнее</a>
						</div>
					</div>

					<div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
						<div class="third-block">
							<img src="images/wardogs.jpg" alt="wardogs">
							<h4>Государственные структуры</h4>
							<a href="/gover-pets">Подробнее</a>
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
								<a href="#">Главная</a>
								<a href="#">О нас</a>
								<a href="#">Материалы</a>
								<a href="/home-pets">Домашние собаки</a>
								<a href="/pet-workers">Военные собаки</a>
								<a href="/gover-pets">Государственные структуры</a>
							</div>

							<div class="right-block d-flex flex-column justify-content-end mx-3">
								<h5>ask@vo-in.com</h5>
								<h5>info@vo-in.com</h5>
								<h5>nda@vo-in.com</h5>
								<h5>support@vo-in.com</h5>
								<h5>Voice Intercommunication</h5>
							</div>
						</div>
						
						<!-- отсюда копируешь -->
						<div class="lang-social h-100 d-flex flex-column align-items-center justify-content-between">
							<div class="lang d-flex justify-content-between w-100">
								<a href="">En</a>
								<a href="">Ru</a>
							</div>

							<div class="social-media">
								<a target="_blank" href="https://vk.com/edvardkarimov96"><img src="images/whitevk.png" alt="vk"></a>
								<a target="_blank" href="https://www.facebook.com/woody.jakson"><img src="images/whitefacebook.png" alt="facebook"></a>
								<a target="_blank" href="http://instagram.com/mrVol1/"><img src="images/whiteinst.png" alt="instagram"></a>
							</div>
						</div>
						<!-- до сюда -->

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
						<button type="button" class="btn" data-dismiss="modal">Закрыть</button>
					</div>
				</div>
			</div>
		</div>
	@endforeach



		
	<!-- MAIN SCREEEN OPEN -->

	<!-- FOOTER CLOSE -->

	
@endsection