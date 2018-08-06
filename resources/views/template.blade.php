<!DOCTYPE html> 
<html lang="{{ app()->getLocale() }}">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="Victor Umezuruike">
        <!--meta name="csrf-token" content="{{ csrf_token() }}"--><!--for ajax requests-->
		
		<title>TaskForce</title>
		<link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}" />
        <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}" />
        <link rel="stylesheet" href="{{ URL::asset('css/datetimepicker.css') }}" />
       
        <script src="https://use.fontawesome.com/80ed8cb158.js"></script>
        <!--multiselect plugin below-->
        
        <link rel="stylesheet" href="{{ URL::asset('css/selectize.bootstrap3.css') }}" />
       
        
        
        
  
		
		
	</head>
	<body>
    <nav class="navbar navbar-new navbar" role="navigation">
	<div class="container-fluid">
        <!-- logo -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
           <a href="#" class="navbar-brand">
                <img src="images/log.png" alt="logo">
                
            </a>
        </div>
		
        <!-- menu -->
        <div class="collapse navbar-collapse navbar-right" id="navbar1">
            <ul class="nav navbar-nav">
                <li><a href='{!! url('/'); !!}'>Home</a></li>
                <li><a href='{!! url('signup'); !!}'>Register</a></li>
                <li><a href='{!! url('signin'); !!}'>Sign in</a></li>
                <li><a href="about.php">Jobs</a></li>
                <li><a href="coaching.php">Urgent Recruitment</a></li>
				<li><a href="workwithus.php">Task Outsourcing</a></li>
                <li><a href='{{ url('contact') }}'>Contact Us</a></li>
                <li><a href='{{ url('tickets') }}'>Help desk</a></li>
                <li><a href='{{ url('booking') }}'>Book a Service</a></li>
            </ul>
        </div> 
    </div>
</nav>


@yield('content')


<footer>
    
    <div class="container">
    <div class="row">
    
    <div class="col-sm-4">
    <h6><strong>Taskforce</strong></h6>
    <ul class="unstyled">
    <li><a href="about.php">Team</a></li>
    <li><a href="contact.php">Contact Us</a></li>
    <li><a href="#">Careers</a></li>
    </ul>
    
    </div>
    
    
    <div class="col-sm-4">
    
    <h6><b>Services</b></h6>
    <ul class="unstyled">
    <li><a href="programs.php">Urgent Recruitment</a></li>
    <li><a href="coaching.php">Task Outsourcing</a></li>
    
    </ul>
    
    </div>
    
    <div class="col-sm-4">
     <h6><b>News</b></h6>
    <ul class="unstyled">
    <li><a href="newsletter.php">Blog</a></li>
    <li><a href="word.php">Connect</a></li>
    <li><a href="#"></a></li>
    </ul>
    
    </div>
    
    </div><!--end of row-->
    
    </div><!--end of container-->
    
    </footer>
        
        <script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
        <script src="{{ URL::asset('js/jquery-3.3.1.min.js') }}"></script>
        <script src="{{ URL::asset('js/sweetalert.min.js') }}"></script>
        <script src="{{ URL::asset('js/jquery.datetimepicker.full.js') }}"></script>
        <script src="{{ URL::asset('js/selectize.js') }}"></script>

        <script>
          $('#skills').selectize({
    maxItems: 3
});
        </script>
        </body>
    </html> 