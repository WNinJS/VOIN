
<nav class="navbar">
    <div class="container">
        <div class="col d-flex justify-content-between align-items-center">

        <a class="navbar-brand" href="/"> <img src="images/logowhite.png" alt="logo"> </a>


        <!-- просто начиная отсюда копируй код и вставляй везде, либо я завтра сам ебану -->
        <div class="adaptive d-flex">
            <div class="navbar-link">
                <ul class="navbar-nav d-flex flex-row nav-links">
                    @if(Request::url() === 'https://voin-ru')
                        <li class="nav-item"> <a class="nav-link active-link" href="/">Главная</a> </li>
                        <li class="nav-item"> <a class="nav-link" href="/about-us">О нас</a> </li>
                        <li class="nav-item"> <a class="nav-link" href="/materials">Материалы</a> </li>
                        <li class="nav-item"> <a class="nav-link" href="/home-pets">Домашние собаки</a> </li>
                        <li class="nav-item"> <a class="nav-link" href="/pet-workers">Военные собаки</a> </li>
                        <li class="nav-item"> <a class="nav-link" href="/gover-pets">Гос. структуры</a> </li>
            
                    @elseif(Request::url() === 'https://voin-ru/about-us')
                        <li class="nav-item"> <a class="nav-link" href="/">Главная</a> </li>
                        <li class="nav-item"> <a class="nav-link active-link" href="/about-us">О нас</a> </li>
                        <li class="nav-item"> <a class="nav-link" href="/materials">Материалы</a> </li>
                        <li class="nav-item"> <a class="nav-link" href="/home-pets">Домашние собаки</a> </li>
                        <li class="nav-item"> <a class="nav-link" href="/pet-workers">Военные собаки</a> </li>
                        <li class="nav-item"> <a class="nav-link" href="/gover-pets">Гос. структуры</a> </li>

                    @elseif(Request::url() === 'https://voin-ru/materials')
                        <li class="nav-item"> <a class="nav-link" href="/">Главная</a> </li>
                        <li class="nav-item"> <a class="nav-link" href="/about-us">О нас</a> </li>
                        <li class="nav-item"> <a class="nav-link active-link" href="/materials">Материалы</a> </li>
                        <li class="nav-item"> <a class="nav-link" href="/home-pets">Домашние собаки</a> </li>
                        <li class="nav-item"> <a class="nav-link" href="/pet-workers">Военные собаки</a> </li>
                        <li class="nav-item"> <a class="nav-link" href="/gover-pets">Гос. структуры</a> </li>

                    @elseif(Request::url() === 'https://voin-ru/home-pets')
                        <li class="nav-item"> <a class="nav-link" href="/">Главная</a> </li>
                        <li class="nav-item"> <a class="nav-link" href="/about-us">О нас</a> </li>
                        <li class="nav-item"> <a class="nav-link" href="/materials">Материалы</a> </li>
                        <li class="nav-item"> <a class="nav-link active-link" href="/home-pets">Домашние собаки</a> </li>
                        <li class="nav-item"> <a class="nav-link" href="/pet-workers">Военные собаки</a> </li>
                        <li class="nav-item"> <a class="nav-link" href="/gover-pets">Гос. структуры</a> </li>

                    @elseif(Request::url() === 'https://voin-ru/pet-workers')
                        <li class="nav-item"> <a class="nav-link" href="/">Главная</a> </li>
                        <li class="nav-item"> <a class="nav-link" href="/about-us">О нас</a> </li>
                        <li class="nav-item"> <a class="nav-link" href="/materials">Материалы</a> </li>
                        <li class="nav-item"> <a class="nav-link" href="/home-pets">Домашние собаки</a> </li>
                        <li class="nav-item"> <a class="nav-link active-link" href="/pet-workers">Военные собаки</a> </li>
                        <li class="nav-item"> <a class="nav-link" href="/gover-pets">Гос. структуры</a> </li>

                    @elseif(Request::url() === 'https://voin-ru/gover-pets')
                        <li class="nav-item"> <a class="nav-link" href="/">Главная</a> </li>
                        <li class="nav-item"> <a class="nav-link" href="/about-us">О нас</a> </li>
                        <li class="nav-item"> <a class="nav-link" href="/materials">Материалы</a> </li>
                        <li class="nav-item"> <a class="nav-link" href="/home-pets">Домашние собаки</a> </li>
                        <li class="nav-item"> <a class="nav-link" href="/pet-workers">Военные собаки</a> </li>
                        <li class="nav-item"> <a class="nav-link active-link" href="/gover-pets">Гос. структуры</a> </li>
                    @endif

                   

                    <!-- Это если не вошел в личный кабинет -->
                    @if(!session('login'))
                        <div class="signin-signup d-flex justify-content-center align-items-center">
                        <li class="d-flex justify-content-center align-items-center"> <a class="login-icon" href="/login"></a> </li>
                        <li class="nav-item signup-text"><a class="nav-link" href="/signup">Начать</a></li>
                        </div> 
                    @endif
                <!-- Это если не вошел в личный кабинет -->
                </ul>
            </div>

            <!-- Это если вошел в личный кабинет -->
            @if(session('user'))
            <div class="profile-menu d-flex justify-content-center align-items-center"> 
                <img class="img-profile" src="images/teamleader.jpg" alt="profile">

                <div class="btn-group d-flex flex-column">
                    <button class="btn dropdown-toggle account-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{Session::get('user')->name}}</button>
                    <div class="dropdown-menu dropdown-menu-left">
                        <a class="dropdown-item" data-toggle="modal" data-target="#account-info-modal">Информация об аккаунте</a>
                        <a class="dropdown-item" href="/logout">Выйти</a>
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