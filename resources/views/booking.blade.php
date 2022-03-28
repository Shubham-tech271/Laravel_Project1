<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Home Page</title>
	<link href="{{asset('public/bs5/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{asset('public')}}/css/styles.css" rel="stylesheet">
	<script type="text/javascript" src="{{asset('public/vendor/jquery/jquery.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('public/bs5/bootstrap.bundle.min.js')}}"></script>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
	  <div class="container">
	    <a class="navbar-brand" href="{{url('/')}}">BookMyTable</a>
	    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
	      <span class="navbar-toggler-icon"></span>
	    </button>
	    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
	      <div class="navbar-nav ms-auto">
	        <a class="nav-link" aria-current="page" href="{{url('/')}}">Home</a>
	        <a class="nav-link" href="{{url('/book')}}">services</a>
	        <a class="nav-link" href="#scroll">Contact Us</a>
	        <a class="nav-link btn btn-sm btn-danger" href="{{url('/book')}}">Booking</a>
	        
	      </div>
	    </div>
	  </div>
	</nav>
  <br>
  <br><br>
  <main>
  @yield('content')
  </main>
    
    

    <!-- Footer-->
<footer  id="footer" class="py-3 bg-black" style="position: fixed;
    width: 100%;
    margin-bottom: 0px;
    bottom: 0px;">
    <div class="container"><p class="m-0 text-center text-grey small">Copyright &copy; BookMyTable 2022</p></div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>
</html>