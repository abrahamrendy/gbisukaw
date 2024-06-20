<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>{{$title}} | GBI Sukawarna</title>

        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/bootstrap-theme.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/fontAwesome.css')}}">
        <link rel="stylesheet" href="{{asset('css/hero-slider.css')}}">
        <link rel="stylesheet" href="{{asset('css/tooplate-style.css')}}">
        <link rel="stylesheet" href="{{asset('css/custom.css')}}">

        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

        <script src="{{asset('js/vendor/modernizr-2.8.3-respond-1.4.2.min.js')}}"></script>
    </head>

<body>
    <div class="header">
        <div class="container">
            <nav class="navbar navbar-inverse" role="navigation">
                <div class="navbar-header">
                    <button type="button" id="nav-toggle" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="{{route('index')}}" class="navbar-brand">
                        <div class="logo"></div>
                    </a>
                    <!-- <a href="{{route('index')}}" class="navbar-brand scroll-top">
                        <div class="logo"></div>
                    </a> -->
                </div>
                <!--/.navbar-header-->
                <div id="main-nav" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="{{route('about')}}">About Us</a></li>
                        <li><a href="{{route('location')}}">Location</a></li>
                        <li><a href="{{route('online_services')}}">Online Services</a></li>
                        <!-- <li><a href="{{route('articles')}}">Articles</a></li> -->
                        <li><a href="{{route('contact_us')}}">Contact Us</a></li>

                        <!-- <li><a href="#" class="scroll-top">Home</a></li>
                        <li><a href="{{route('about')}}" class="scroll-link" data-id="about">About Us</a></li>
                        <li><a href="#" class="scroll-link" data-id="portfolio">Location</a></li>
                        <li><a href="#" class="scroll-link" data-id="blog">Online Services</a></li>
                        <li><a href="#" class="scroll-link" data-id="blog">Article</a></li>
                        <li><a href="#" class="scroll-link" data-id="contact">Contact Us</a></li> -->
                    </ul>
                </div>
                <!--/.navbar-collapse-->
            </nav>
            <!--/.navbar-->
        </div>
        <!--/.container-->
    </div>
    <!--/.header-->