<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sheba Blood Dononation </title>
    <link rel="stylesheet" href="{{asset('/bfrontend/assets/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:300,400,700">
    <link rel="stylesheet" href="{{asset('/bfrontend/assets/fonts/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('/bfrontend/assets/fonts/simple-line-icons.min.css')}}">
    <link rel="stylesheet" href="{{asset('/bfrontend/assets/css/styles.min.css')}}">
    <link rel="stylesheet" href="{{asset('/bfrontend/assets/fonts/ionicons.min.css')}}">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>

<body>b
    <nav class="navbar navbar-light navbar-expand-lg fixed-top bg-white clean-navbar">
        <div class="container"><a class="navbar-brand logo" href="{{url('/')}}"><strong>Sheba Healthcare</strong></a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div
                class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav ml-auto main-menu">
                  <li class="nav-item" role="presentation"><a class="nav-link" href="{{url('/users')}}">users</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="{{url('/')}}">About us</a></li>

                <li class="nav-item" role="presentation"><a class="nav-link" href="{{url('/')}}">Our Doctors</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="{{url('/bloodbank')}}">BloodBank</a></li>

                @if (Route::has('login'))
                    <div class="top-right links">
                        @auth
                            <a href="{{ url('/home') }}">Home</a>
                        @else
                            <a href="{{ route('login') }}">Login</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}">Register</a>
                            @endif
                        @endauth
                    </div>
                @endif





    <div class="container-float">
        @yield('content')
    </div>

    <footer class="page-footer dark">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <h5>Get started</h5>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Sign up</a></li>
                        <li><a href="#">Downloads</a></li>
                    </ul>
                </div>
                <div class="col-sm-3">
                    <h5>About us</h5>
                    <ul>
                        <li><a href="#">Company Information</a></li>
                        <li><a href="#">Contact us</a></li>
                        <li><a href="#">Reviews</a></li>
                    </ul>
                </div>
                <div class="col-sm-3">
                    <h5>Support</h5>
                    <ul>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Help desk</a></li>
                        <li><a href="#">Forums</a></li>
                    </ul>
                </div>
                <div class="col-sm-3">
                    <h5>Legal</h5>
                    <ul>
                        <li><a href="#">Terms of Service</a></li>
                        <li><a href="#">Terms of Use</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <p>njn fall 2019</p>
            <li><a href="{{url('/login-admin')}}">admin login</a></li>
        </div>

    </footer>


    <script src="{{asset('bfrontend/assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('bfrontend/assets/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('bfrontend/assets/js/script.min.js')}}"></script>
    <script src="{{asset('bfrontend/assets/js/theme.js')}}"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            var url = window.location;
            $('ul.nav a[href="'+ url +'"]').parent().addClass('active');
            $('ul.nav a').filter(function() {
                 return this.href == url;
            }).parent().addClass('active');
        });
    </script>

</body>

</html>
