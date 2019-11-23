@extends('mainLayout')

@section('title', 'Government structures')


@section('content')

<div class="container-fluid">

    <div class="main-screen-goverment">

        <!-- navbar open -->
        <nav class="navbar">
            <div class="container">
                <div class="col d-flex justify-content-between align-items-center">

                    <a class="navbar-brand" href="/"> <img src="images/logowhite.png" alt="logo"> </a>

                    <div class="navbar-link">
                        <ul class="navbar-nav d-flex flex-row">
                            <li class="nav-item"> <a class="nav-link " href="/">Main</a> </li>
                            <li class="nav-item"> <a class="nav-link" href="/home-pets">Home dogs</a> </li>
                            <li class="nav-item"> <a class="nav-link" href="/pet-workers">Duty dogs</a> </li>
                            <li class="nav-item"> <a class="nav-link active-link" href="/gover-pets">For government structures</a> </li>
                        </ul>
                    </div>

                </div>
            </div>
        </nav>
        <!-- navbar close -->


        <!-- description open -->
        <div class="container description d-flex justify-content-between">
            <div class="col-9">
                <h1 class="cursor-default">For government structures</h1>
                <p class="cursor-default">One of the possible options for using the complex in law enforcement, to reduce the death of animals. To be able to view this page, you must register and submit a document form.</p>
                <button disabled>Apply for information</button>
            </div>
        </div>
        <!-- description close -->


    </div>



    <!-- footer open -->
    <footer style="margin: 0;">
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