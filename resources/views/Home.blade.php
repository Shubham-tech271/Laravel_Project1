<!DOCTYPE html>
<html>
<head>
	
	


    <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Home Page</title>

    <link rel="icon" type="image/x-icon" href="{{asset('public')}}/img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{asset('public')}}/css/styles.css" rel="stylesheet"  type="text/css"/>




</head>
<body id="page-top" >
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
            <div class="container px-5">
                <a class="navbar-brand" href="{{url('/')}}">BookMyTable</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <a class="nav-link" aria-current="page" href="{{url('/')}}">Home</a>
                        <a class="nav-link" href="#scroll">services</a>
                        <a class="nav-link" href="#contactus">Contact Us</a>
                        <a class="nav-link btn btn-sm btn-danger" href="{{url('/book')}}">Booking</a>
                    </ul>
                </div>
            </div>
        </nav>
<!-- Header-->
           <header class="masthead text-center text-white" style="header.masthead {
  position: relative;
  overflow: hidden;
  padding-top: calc(7rem + 72px);
  padding-bottom: 7rem;
  background:url('{{asset('public')}}/img/8.jpg');
  background-repeat: no-repeat;
  background-position: center center;
  background-attachment: scroll;
  background-size: cover;
}">
            <div class="masthead-content">
                <div class="container px-3">
                    <h1 class="masthead-heading mb-0"> Place To Relax & Enjoy  </h1>
                    <h2 class="masthead-subheading mb-0"> Relax on your terms with Best luxury treatment.</h2>
                    <a class="btn btn-primary btn-xl rounded-pill mt-5" href="{{url('/book')}}"> Book Now! </a>
                </div>
            </div>
            <div class="bg-circle-1 bg-circle"></div>
            
            <div class="bg-circle-3 bg-circle"></div>
            
        </header>

        <!-- Content section 1-->
        <section id="scroll">
            <div class="container px-5">
                <div class="row gx-5 align-items-center">
                    <div class="col-lg-6 order-lg-2">
                        <div class="p-5"><img class="img-fluid rounded-circle" src="{{asset('public')}}/img/3.jpg" alt="..." /></div>
                    </div>
                    <div class="col-lg-6 order-lg-1">
                        <div class="p-5">
                            <h2 class="display-4">For those who prefer sober...</h2>
                            <p>serious, sensible, and solemn. These are the terms most people search in there life as it is the only thing missing as money is not a big challenge for most people for those who just want to blend in and enjoy....</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Content section 2-->
        <section>
            <div class="container px-5">
                <div class="row gx-5 align-items-center">
                    <div class="col-lg-6">
                        <div class="p-5"><img class="img-fluid rounded-circle" src="{{asset('public')}}/img/2.jpg" alt="..." /></div>
                    </div>
                    <div class="col-lg-6">
                        <div class="p-5">
                            <h2 class="display-4">For Those who Prefer Special !</h2>
                            <p>Premium Brand are the ones that give you the best features at the best value. They operate with a close to one ratio of functionality and price. So since they are providing the best features and quality, consumers pay them high price for that. They feel it's worth it. worthwhile and costeffective like those brands out there...</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Content section 3-->
        <section>
            <div class="container px-5">
                <div class="row gx-5 align-items-center">
                    <div class="col-lg-6 order-lg-2">
                        <div class="p-5"><img class="img-fluid rounded-circle" src="{{asset('public')}}/img/1.jpg" alt="..." /></div>
                    </div>
                    <div class="col-lg-6 order-lg-1">
                        <div class="p-5">
                            <h2 class="display-4">For Those who Prefer luxury !</h2>
                            <p>a state of great comfort or elegance, especially when involving great expense.But not anymore live and feel special with affordable prices.an inessential, desirable item which is expensive or difficult to obtain.a pleasure obtained only rarely. But now enjoy your worth.... </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

          <!-- Footer-->
        <footer class="py-3 bg-black">
        <div class="contact" id="contactus">
                
            
        <div class="container px-5">
        <p class="m-0 text-center text-white large">Contact us</p>
                <p class="m-0 text-center text-white large">+1800 000 234 , +1800 000 235</p>
                <p class="m-0 text-center text-white large">bookmytable@yahoo.com</p>
                <p class="m-0 text-center text-grey small">Copyright &copy; BookMyTable 2022</p>
            </div>
        </div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="{{asset('public')}}/js/scripts.js"></script>
</body>
</html>
