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
                    

                    <!-- просто начиная отсюда копируй код и вставляй везде, либо я завтра сам ебану -->
                    <div class="adaptive d-flex">
                        <div class="navbar-link">
                            <ul class="navbar-nav d-flex flex-row nav-links">
                                <li class="nav-item"> <a class="nav-link " href="/">Main</a> </li>
                                <li class="nav-item"> <a class="nav-link" href="">About Us</a> </li>
                                <li class="nav-item"> <a class="nav-link" href="">Materials</a> </li>
                                <li class="nav-item"> <a class="nav-link" href="/home-pets">Home dogs</a> </li>
                                <li class="nav-item"> <a class="nav-link" href="/pet-workers">Duty dogs</a> </li>
                                <li class="nav-item"> <a class="nav-link active-link" href="/gover-pets">Government structures</a> </li>

                                <!-- Это если не вошел в личный кабинет -->
                               <!-- <div class="signin-signup d-flex justify-content-center align-items-center">
                                    <li class="d-flex justify-content-center align-items-center"> <a class="login-icon" href=""></a> </li>
                                    <li class="nav-item signup-text"><a class="nav-link" href="">Not account?</a></li>
                                </div> -->
                                <!-- Это если не вошел в личный кабинет -->

                            </ul>

                        </div>

                        <!-- Это если вошел в личный кабинет -->
                        <div class="profile-menu d-flex justify-content-center align-items-center"> 
                            <img class="img-profile" src="images/teamleader.jpg" alt="profile">
            
                            <div class="btn-group d-flex flex-column">
                                <button class="btn dropdown-toggle account-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Eduard</button>
                                <div class="dropdown-menu dropdown-menu-left">
                                    <a class="dropdown-item" data-toggle="modal" data-target="#account-info-modal">Account info</a>
                                    <a class="dropdown-item" data-toggle="modal" data-target="#change-password-modal">Change Password</a>
                                    <a class="dropdown-item" href="#">Logout</a>
                                </div> 
                            </div>
                        </div>
                        <!-- Это если вошел в личный кабинет -->


                    </div>
                    <!-- тут конец отрезка который нужно копировать -->
              



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
            <div class="col-9">
                <h1 class="cursor-default">Government structures</h1>
                <p class="cursor-default">Monitoring and communication complex for dogs provides remote voice interaction between dog and a person without visual control, dog’s biometric indexes monitoring, POV photofixation and video recording of the actions around the dog, possibility of pre-recorded commands  sending</p>
                <button data-toggle="modal" data-target="#gover-info-modal">Apply for information</button>
            </div>
        </div>
        <!-- description close -->


    </div>



    <!-- footer open -->
    <footer class="gover-footer">
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

<!-- gover info modal -->
<div class="modal fade" id="gover-info-modal" tabindex="-1" role="dialog" aria-labelledby="gover-info-modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="complex-modalLabel">Apply for information</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Coming soon</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- gover info modal -->

<!-- account info modal -->
<div class="modal fade" id="account-info-modal" tabindex="-1" role="dialog" aria-labelledby="account-info-modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="account-info-modalLabel">Account Info</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body d-flex flex-column">
                <p>Name: </p>
                <p>Second name: </p>
                <p>Email: </p>
                <p>Phone: </p>
                <p>Username: </p>
                <p>Password: </p>

                <!-- Если это госслужащий -->
                <div class="docs"></div>
                <!-- Если это госслужащий -->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- account info modal -->


<!-- change password modal -->
<div class="modal fade" id="change-password-modal" tabindex="-1" role="dialog" aria-labelledby="change-password-modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="change-password-modalLabel">Change password</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body d-flex flex-column">
                <form class="change-password-form">
                    <input type="password" placeholder="New password">
                </form>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn" data-dismiss="modal">Close</button>
                <button type="button" class="btn" data-dismiss="modal">Save</button>
            </div>
        </div>
    </div>
</div>
<!-- change password modal -->





@endsection