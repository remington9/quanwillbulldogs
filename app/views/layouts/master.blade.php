<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    @yield('title')
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
    <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
    <link href="/css/master.css" rel="stylesheet">
</head>
<body>
<header>
    <div class="container">
        <img id="banner" src="/img/banner.jpg" alt="">
    <nav class="navbar navbar-default nav-justified navbar-inverse navbar-static-top">
        <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
           <div class="navbar-header">
             <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
               <span class="sr-only">Toggle navigation</span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
             </button>

           </div>

           <!-- Collect the nav links, forms, and other content for toggling -->
           <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
             <ul class="nav navbar-nav">
               <li class="active"><a href="#">Home</a></li>
               <li><a href="#">About</a></li>
               <li><a href="#">Contact</a></li>
               <li><a href="#">Males</a></li>
               <li><a href="#">Females</a></li>
               <li><a href="#">Upcoming Breeding</a></li>
               <li><a href="#">Available Puppies</a></li>
               <li><a href="#">Past Litters</a></li>
             </ul>
           </div><!-- /.navbar-collapse -->
        </div>
    </nav>
    </div>
</header>
<main>
    <div class="container">
        @if (Session::has('successMessage'))
            <div class="alert alert-success">{{{ Session::get('successMessage') }}}</div>
        @endif
        @if (Session::has('errorMessage'))
            <div class="alert alert-danger">{{{ Session::get('errorMessage') }}}</div>
        @endif
        @if($errors->has())
            <div class="alert alert-danger" role="alert">
                <ul>
                    @foreach($errors->all() as $key=> $error)
                        <li>{{{$error}}}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        @yield('error')
        @yield('content')
    </div>
</main>
<footer class="footer navbar-bottom">
    <div class="container">
      <hr>
      <p class="col-lg-5 col-md-6 col-xs-12">Bullnanza Bulldogges P.O. Box 331 Bulverde, Texas 78163</p>
      <p class="col-lg-3 col-md-2 col-xs-12"><a href="tel:+1800229933">210-544-3004</a></p>
      <p class="col-lg-4 col-md-4 col-xs-12">© Copyright 2009 Bullnanza Bulldogges</p>
    </div>
</footer>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>
