@extends('mainLayout')

@section('title', 'Военные собаки')
    
@section('content')

<div class="container-fluid">

<div class="main-screen-buisness">
	<!-- navbar open -->
	@include('partials.header')
	<!-- navbar close -->
		
	<!-- description open -->
	<div class="container description d-flex justify-content-between">	
		<div class="col-12">
			<h1 class="cursor-default">Военные собаки</h1>
			<p class="cursor-default">Решение для бизнеса по взаимодействию кинолога и военной собаки</p>
			<a class="anchor" href="#feedback"> <button >Связаться с нами</button> </a>
		</div>
	</div>
	<!-- description close -->
</div>		

<!-- opportunities open -->
<div class="opportunities text-center">
	<div class="container">
		<h2>Возможности</h2>
        <h3>Какие возможности предоставляет комплекс</h3>

		<div class="row d-flex justify-content-around align-items-start">
                @foreach ($petWorker[0]->capabilities as $cap)
                    <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 flex-column d-flex justify-content-center align-items-center icon-block">
						<div class="image">
							<img src="{{asset('storage/'.$cap->icon)}}" alt="record">
						</div>
                        <p>{{$cap->desc}}</p>
                    </div>
                @endforeach				
			<hr class="opportunities-hr">
		</div>
	</div>
</div>
<!-- opportunities close -->


<!-- feedback open -->
<div id="feedback" class="feedback text-center">
	<div class="container">
		<h2>Обратная связь</h2>
		<h3>Оставьте свой email в контактной форме ниже и мы свяжемся с вами</h3>
        <form method="POST" action="/send-mail">
            {{ csrf_field() }}
			<input type="email" required placeholder="example@gmail.com" name="mail" class="mail">
			<button type="submit" class="btn-submit">Отправить</button>
		</form>
		<h2 class="text-center msg" style="display: none;">Ваш email успешно отправлен!</h2>
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
						<a href="/">Главная</a>
						<a href="/about-us">О нас</a>
						<a href="/materials">Материалы</a>
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