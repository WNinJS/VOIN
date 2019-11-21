@extends('mainLayout')

@section('title', 'Государственные структуры')


@section('content')

<div class="container-fluid">

    <div class="main-screen-goverment">

        <!-- navbar open -->
        <nav class="navbar">
            <div class="container">
                <div class="col d-flex justify-content-between align-items-center">

                    <a class="navbar-brand" href="index.html"> <img src="images/logowhite.png" alt="logo"> </a>

                    <div class="navbar-link">
                        <ul class="navbar-nav d-flex flex-row">
                            <li class="nav-item"> <a class="nav-link" href="/">Главная</a></li>
                            <li class="nav-item"> <a class="nav-link" href="/home-pets">Для домашних</a></li>
                            <li class="nav-item"> <a class="nav-link" href="/pet-workers">Для служебных</a></li>
                            <li class="nav-item"> <a class="nav-link active-link" href="/">Для государственных структур</a> </li>
                        </ul>
                    </div>

                </div>
            </div>
        </nav>
        <!-- navbar close -->


        <!-- description open -->
        <div class="container description d-flex justify-content-between">
            <div class="col-9">
                <h1 class="cursor-default">Для государственных структур</h1>
                <p class="cursor-default">Решение для бизнеса по взаимодействию кинолога со своей служебной собакой</p>
                <button disabled>Подать заявку на информацию</button>
            </div>
        </div>
        <!-- description close -->


    </div>



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