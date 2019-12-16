
<nav class="navbar">
    <div class="container">
        <div class="col d-flex justify-content-between align-items-center">

        <a class="navbar-brand" href="/"> <img src="images/logowhite.png" alt="logo"> </a>


        <!-- просто начиная отсюда копируй код и вставляй везде, либо я завтра сам ебану -->
        <div class="adaptive d-flex">
            <div class="navbar-link">
                <ul class="navbar-nav d-flex flex-row nav-links">
                    <li class="nav-item"> <a class="nav-link " href="/">Main</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="/about-us">About Us</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="/materials">Materials</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="/home-pets">Home dogs</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="/pet-workers">Duty dogs</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="/gover-pets">Government structures</a> </li>

                    <!-- Это если не вошел в личный кабинет -->
                    @if(!session('login'))
                        <div class="signin-signup d-flex justify-content-center align-items-center">
                        <li class="d-flex justify-content-center align-items-center"> <a class="login-icon" href="/login"></a> </li>
                        <li class="nav-item signup-text"><a class="nav-link" href="/signup">SignUp</a></li>
                        </div> 
                    @endif
                <!-- Это если не вошел в личный кабинет -->
                </ul>
            </div>

            <!-- Это если вошел в личный кабинет -->
            @if(session('login'))
            <div class="profile-menu d-flex justify-content-center align-items-center"> 
                <img class="img-profile" src="images/teamleader.jpg" alt="profile">

                <div class="btn-group d-flex flex-column">
                    <button class="btn dropdown-toggle account-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{Session::get('login')}}</button>
                    <div class="dropdown-menu dropdown-menu-left">
                        <a class="dropdown-item" data-toggle="modal" data-target="#account-info-modal">Account info</a>
                        <a class="dropdown-item" href="/logout">Logout</a>
                    </div> 
                </div>
            </div>
            @endif
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