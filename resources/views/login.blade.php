
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>BOLT Gaming Template - Contact Page</title>

    <!-- Bootstrap core CSS -->
    <link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="/css/fontawesome.css">
    <link rel="stylesheet" href="/css/templatemo-lugx-gaming.css">
    <link rel="stylesheet" href="/css/owl.css">
    <link rel="stylesheet" href="/css/animate.css">
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
<!--

-->
  </head>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="index" class="logo">
                        <img src="/images/logo.png" alt="" style="width: 158px;">
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                      <!-- <li><a href="home">Home</a></li>
                      <li><a href="shop">Our Shop</a></li>
                      <li><a href="pro">Product Details</a></li>
                      <li><a href="con">Contact Us</a></li>
                      <li><a href="login">Sign In</a></li> -->
                  </ul>   
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <div class="page-heading header-text">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h3>Login Page</h3>
          <span class="breadcrumb"><a href="#">Home</a>  >  Login Page</span>
        </div>
      </div>
    </div>
  </div>
    
  <div class="section most-played">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="section-heading">
  <div class="container" >
    <div class="jumbotron">

    @if(session()->has('success'))
      <div class="alert alert-success ">
          <p>{{ session()->get('success') }}</p>
      </div>
    @endif

    @if(session()->has('error'))
      <div class="alert alert-danger ">
          <p>{{ session()->get('error') }}</p>
      </div>
    @endif
    <form action="{{url('login_process')}}" method="post" class="signup-page-form ">

<div class="form-group">

  <br><br>
@csrf
<label>Enter Your email:</label><br>
<input type="email" name="email" required><br><br>

<label>Enter Your Password:</label><br>
<input type="password" name="password" required><br><br>

<button type="submit" name="submit" class="btn btn-info btn-lg">Login</button><br><br>


</form>
</div>
<h4>If You Didn't Register, Please Register First!</h4> </br><button type="Register" name="Register Page" class="btn btn-info btn-lg"><a href="signup" style="color: black">Register Page</a></button>


  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script src="/jquery/jquery.min.js"></script>
  <script src="/bootstrap/js/bootstrap.min.js"></script>
  <script src="/js/isotope.min.js"></script>
  <script src="/js/owl-carousel.js"></script>
  <script src="/js/counter.js"></script>
  <script src="/js/custom.js"></script>

  </body>
</html>