@extends('mainLayout')

@section('title', 'О нас')


@section('content')

<div class="container-fluid">
  <div class="main-screen-about">
     <!-- navbar open -->
      @include('partials.header')
      <!-- navbar close -->
      <!-- description open -->
      <div class="container description d-flex justify-content-between">
          <div class="col-12">
              <h1 class="cursor-default">Voice Intercommunication</h1>
              <p class="cursor-default">Созидатели. Мечтатели. Создатели</p>
              <a class="anchor" href="#about-info"> <button >Подробнее</button> </a>  
          </div>
      </div>
      <!-- description close -->
  </div>


<!-- about us open -->
<div id="about-info" class="aboutus text-center">
    <div class="container">
        <h2>О нас</h2>
        <h3>Кто мы такие?</h3>
        <div class="row d-flex justify-content-around align-items-start">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem sunt earum deserunt beatae veniam laborum architecto culpa, reiciendis dicta quam, iusto et nesciunt. Quaerat saepe consectetur esse similique deleniti eveniet ipsum neque, unde corporis perferendis magni, officiis eius quos harum tenetur dolores reiciendis quae repellat aut modi distinctio inventore optio aspernatur. Laboriosam blanditiis debitis maxime, id earum quae molestias aliquam, pariatur sit repellendus ut ex voluptatum enim soluta rem. Mollitia in quia debitis aliquam eveniet accusantium et, quaerat autem ipsum, aliquid similique vel sit facilis perspiciatis obcaecati ea esse pariatur provident, aperiam! Quod, magnam doloribus sequi accusantium consequuntur inventore culpa.</p>
            <hr>
        </div>
    </div>
</div>
<!-- about us close -->


<!-- team open -->
<div class="team text-center">
    <div class="container">
        <h2>Команда проекта</h2>
        <h3>Члены команды</h3>
        <div class="row d-flex justify-content-around align-items-start">
             <div class="members-of-team d-flex flex-wrap justify-content-around">
                @foreach ($members as $member)
                    <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3 member-block">
                        <img class="member-photo" src="{{asset('storage/'.$member->photo)}}" alt="member_logo">
                        <h4>{{$member->fullname}}</h4>
                        <h5>{{$member->position}}</h5>
                        <!-- <div class="member-social-media">
                            <a target="_blank" href="https://vk.com/edvardkarimov96"><img src="images/whitevk.png" alt="vk"></a>
                            <a target="_blank" href="https://www.facebook.com/woody.jakson"><img src="images/whitefacebook.png" alt="facebook"></a>
                            <a target="_blank" href="http://instagram.com/mrVol1/"><img src="images/whiteinst.png" alt="instagram"></a>
                        </div> -->
                    </div>
                @endforeach
             </div>
        </div>
    </div>
</div>
<!-- team close -->

<!-- footer open -->
  <footer class="gover-footer">
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