@extends('mainLayout')

@section('title', 'About Us')


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
              <p class="cursor-default">Doers. Dreamers. Creators</p>
              <button>See more</button>
          </div>
      </div>
      <!-- description close -->

  </div>



<!-- about us open -->
<div class="aboutus text-center">
    <div class="container">
        <h2>About Us</h2>
        <h3>Who we are</h3>

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
        <h2>Project team</h2>
        <h3>Members</h3>

        <div class="row d-flex justify-content-around align-items-start">
             <div class="members-of-team d-flex flex-wrap justify-content-around">
                <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3 member-block">
                    <img class="member-photo" src="images/dev.jpg" alt="member_logo">
                    <h4>Karimov Eduard</h4>
                    <h5>Team Leader</h5>
                    <!-- <div class="member-social-media">
                        <a target="_blank" href="https://vk.com/edvardkarimov96"><img src="images/whitevk.png" alt="vk"></a>
                        <a target="_blank" href="https://www.facebook.com/woody.jakson"><img src="images/whitefacebook.png" alt="facebook"></a>
                        <a target="_blank" href="http://instagram.com/mrVol1/"><img src="images/whiteinst.png" alt="instagram"></a>
                    </div> -->
                </div>

                <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3 member-block">
                    <img class="member-photo" src="images/dev.jpg" alt="member_logo">
                    <h4>Abdulov Roman</h4>
                    <h5>Hardware Developer</h5>
                    <!-- <div class="member-social-media">
                        <a target="_blank" href="https://vk.com/edvardkarimov96"><img src="images/whitevk.png" alt="vk"></a>
                        <a target="_blank" href="https://www.facebook.com/woody.jakson"><img src="images/whitefacebook.png" alt="facebook"></a>
                        <a target="_blank" href="http://instagram.com/mrVol1/"><img src="images/whiteinst.png" alt="instagram"></a>
                    </div> -->
                </div>

                <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3 member-block">
                    <img class="member-photo" src="images/dev.jpg" alt="member_logo">
                    <h4>Tshelichev Oleg</h4>
                    <h5>Project Manager</h5>
                    <!-- <div class="member-social-media">
                        <a target="_blank" href="https://vk.com/edvardkarimov96"><img src="images/whitevk.png" alt="vk"></a>
                        <a target="_blank" href="https://www.facebook.com/woody.jakson"><img src="images/whitefacebook.png" alt="facebook"></a>
                        <a target="_blank" href="http://instagram.com/mrVol1/"><img src="images/whiteinst.png" alt="instagram"></a>
                    </div> -->
                </div>

                <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3 member-block">
                    <img class="member-photo" src="images/dev.jpg" alt="member_logo">
                    <h4>Lukmanov Ilnar</h4>
                    <h5>Software Developer</h5>
                   <!--  <div class="member-social-media">
                        <a target="_blank" href="https://vk.com/edvardkarimov96"><img src="images/whitevk.png" alt="vk"></a>
                        <a target="_blank" href="https://www.facebook.com/woody.jakson"><img src="images/whitefacebook.png" alt="facebook"></a>
                        <a target="_blank" href="http://instagram.com/mrVol1/"><img src="images/whiteinst.png" alt="instagram"></a>
                    </div> -->
                </div>

                <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3 member-block">
                    <img class="member-photo" src="images/dev.jpg" alt="member_logo">
                    <h4>Uscov Nicolay</h4>
                    <h5>Software developer</h5>
                    <!-- <div class="member-social-media">
                        <a target="_blank" href="https://vk.com/edvardkarimov96"><img src="images/whitevk.png" alt="vk"></a>
                        <a target="_blank" href="https://www.facebook.com/woody.jakson"><img src="images/whitefacebook.png" alt="facebook"></a>
                        <a target="_blank" href="http://instagram.com/mrVol1/"><img src="images/whiteinst.png" alt="instagram"></a>
                    </div> -->
                </div>

                <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3 member-block">
                    <img class="member-photo" src="images/dev.jpg" alt="member_logo">
                    <h4>Kochkin Maxim</h4>
                    <h5>Software developer</h5>
                    <!-- <div class="member-social-media">
                        <a target="_blank" href="https://vk.com/edvardkarimov96"><img src="images/whitevk.png" alt="vk"></a>
                        <a target="_blank" href="https://www.facebook.com/woody.jakson"><img src="images/whitefacebook.png" alt="facebook"></a>
                        <a target="_blank" href="http://instagram.com/mrVol1/"><img src="images/whiteinst.png" alt="instagram"></a>
                    </div> -->
                </div>
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
                          <a href="/">Main</a>
                          <a href="/about-us">About Us</a>
                          <a href="/materials">Materials</a>
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