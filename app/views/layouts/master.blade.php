<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Genetic Foundation Bulldogs</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
    <link href="/css/master.css" rel="stylesheet">
    <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
</head>
<body>
<header>
    <div class="container">
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
             <a class="navbar-brand" href="#">G.F.B.</a>
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
               <li><a href="#">Products</a></li>
               <li><a href="#">Blog</a></li>
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
<footer>
    
</footer>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>
