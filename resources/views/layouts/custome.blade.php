<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">


    <!-- imported -->
    <link rel="stylesheet" href="{{asset('fontawesome/css/all.css')}}">
    <link rel="stylesheet" href="{{asset('css/tailwind.min.css')}}">
    <script src="{{asset('js/sweetalert.min.js')}}"></script>

    <!-- desktop -->
    <link rel="stylesheet" href="{{asset('css/fix.css')}}">
    <link rel="stylesheet" href="{{asset('css/desktop/about.css')}}">
    <link rel="stylesheet" href="{{asset('css/desktop/home.css')}}">
    <link rel="stylesheet" href="{{asset('css/loan/loan.css')}}">
    <link rel="stylesheet" href="{{asset('css/loan/loancomplete.css')}}">
    <link rel="stylesheet" href="{{asset('css/deedofassigment/deed.css')}}">
    <link rel="stylesheet" href="{{asset('css/promissory/prom.css')}}">
    <link rel="stylesheet" href="{{asset('css/credit/credit.css')}}">
    <link rel="stylesheet" href="{{asset('css/certication/certification.css')}}">
    <link rel="stylesheet" href="{{asset('css/creditlifeinsurance/creditlifeinsurance.css')}}">
    <link rel="stylesheet" href="{{asset('css/emergencyloan/emergencyloan.css')}}">
    <link rel="stylesheet" href="{{asset('css/applicationadds/applicationadds.css')}}">
    <link rel="stylesheet" href="{{asset('css/loanagreement/loanagreement.css')}}">

    <!-- tablet -->
    <link rel="stylesheet" href="{{asset('css/tablet/fix.css')}}">
    <link rel="stylesheet" href="{{asset('css/tablet/about.css')}}">
    <link rel="stylesheet" href="{{asset('css/tablet/home.css')}}">

    <!-- mobiles -->
    <link rel="stylesheet" href="{{asset('css/mobile/home.css')}}">
    <link rel="stylesheet" href="{{asset('css/mobile/fix.css')}}">
    <link rel="stylesheet" href="{{asset('css/mobile/aboutus.css')}}">



</head>

<body>
    <!-- 
|--------------------------------------------------------------------------
| header
|--------------------------------------------------------------------------
| -->
    <header>
    <body>
        
         <div class="box">
            <div class="logo-image"><img src="{{asset('storage/project_mages/king.ico')}}" alt="logo"></div>
            <div class="logoname"> <span>CITEREMPCO</span> <small>Isulan</small></div>
        </div>
        <div class="box">

            <ul>
                <li><a href="{{route('citerempco.register')}}">Home</a></li>
                <li><a href="{{route('citerempco.aboutus')}}">About</a></li>
                        @if (Auth::check())
                <li><a href="#">
                        <div><i class="fas fa-envelope"></div></i>
                    </a></li>
                <li><a href="#">
                        <div class="bell"><i class="fas fa-bell"></i> <span id="number">5</span></div>
                    </a></li>
                <li><a href="{{route('logout')}}">Logout</a></li>
                
                @else
                <li><a href="{{route('login')}}">Log-in</a></li>

                @endif


            </ul>
        </div>
    </header>


    <!-- 
|--------------------------------------------------------------------------
| sidebar profile
|--------------------------------------------------------------------------
| -->


    <!-- 
|--------------------------------------------------------------------------
| content
|--------------------------------------------------------------------------
| -->

    <div class="container-fluide">
           
        @yield('content')


    </div>
    <!-- 
|--------------------------------------------------------------------------
| footer area
|--------------------------------------------------------------------------
| -->
    <footer>
        <div class="footer-container row">
            <div class="fbox-wrapper col-lg-3 col-md-6 col-sm-6">
                <h2>Useful links</h2>
                <div class="fbox-content ">
                    <div class="flink-wrapper">
                        <ul class="flinks">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Sign-Up</a></li>
                            <li><a href="#">About</a></li>
                            <li><a href="#">Log in</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="fbox-wrapper col-lg-3 col-md-6 col-sm-6">
                <h2>Latest Post</h2>
                <div class="fbox-content">
                    <p>
                        Latest loan of Central Isulan Teachers,
                        Employees and Retirees Multi - Purpose Cooperative is for the employee
                    </p>
                </div>
            </div>

            <div class="fbox-wrapper col-lg-3 col-md-6 col-sm-6">
                <h2>Business Hours</h2>
                <div class="fbox-content">
                    <p>
                        Loan transaction in the office of
                        Citerempco is available at.<sup></sup>
                    </p>
                    <p class="time">Mon to Fri : 8:00 am to 5:00 pm</p>
                </div>
            </div>

            <div class="fbox-wrapper col-lg-3 col-md-6 col-sm-6">
                <h2>Tags</h2>
                <div class="fbox-content">
                    <div class="flink-wrapper">
                        <ul class="ftags">
                            <li><a href="#">Map</a></li>
                            <li><a href="#">About</a></li>
                            <li><a href="#">News</a></li>
                            <li><a href="#">Post</a></li>
                            <li><a href="#">Clients</a></li>
                            <li><a href="#">Contact us</a></li>
                        </ul>
                    </div>
                </div>
            </div>


        </div>
        <div class="powerd"> Powerd by: J7. IT - solutions</div>
    </footer>
    <script src="{{asset('js/jquery-3.6.0.min.js')}}"></script>
    @yield('scripts')

</body>

</html>