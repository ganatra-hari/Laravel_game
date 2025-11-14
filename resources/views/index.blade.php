<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">


    <title>BOLT GAMING</title>

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
                    <a href="home" class="logo">
                        <img src="/images/logo.png" alt="" style="width: 158px;"><h2></h2>
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                      <li><a href="home" class="active">Home</a></li>
                      <li><a href="shop">Our Shop</a></li>
                      <li><a href="pro">Product Details</a></li>
                      <li><a href="con">Contact Us</a></li>
                      <li><a href="logout">Logout</a></li>
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

  <div class="main-banner">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 align-self-center">
          <div class="caption header-text">
            <h6>Welcome to BOLT GAMES</h6>
            <h2>BEST GAMING SITE EVER!</h2>
            <div class="search-input">

              <form id="search" action="searchgame_user" method="post">
                @csrf
                <input type="text" placeholder="Search Game" name="name" />
                <button type="submit" value="search">Search Now</button>
              </form>

            </div>
          </div>
        </div>
        <div class="col-lg-4 offset-lg-2 ">
          <div class="right-image">
           <a href="fh5"> <img src="/images/fh5.jpg" alt=""></a>
            <span class="price">Free</span>
            <!-- <span class="price"><em></em>Free</span> -->
            <span class="offer">-100%</span>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="features">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-6">
          <a href="#">
            <div class="item">
              <div class="image">
                <img src="/images/featured-01.png" alt="" style="max-width: 44px;">
              </div>
              <h4>Free Games</h4>
            </div>
          </a>
        </div>
        <div class="col-lg-3 col-md-6">
          <a href="#">
            <div class="item">
              <div class="image">
                <img src="/images/featured-02.png" alt="" style="max-width: 44px;">
              </div>
              <h4>User Friendly</h4>
            </div>
          </a>
        </div>
        <div class="col-lg-3 col-md-6">
          <a href="#">
            <div class="item">
              <div class="image">
                <img src="/images/featured-03.png" alt="" style="max-width: 44px;">
              </div>
              <h4>Regularly Link Update</h4>
            </div>
          </a>
        </div>
        <div class="col-lg-3 col-md-6">
          <a href="#">
            <div class="item">
              <div class="image">
                <img src="/images/featured-04.png" alt="" style="max-width: 44px;">
              </div>
              <h4>No Ads</h4>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>

  <div class="section trending">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="section-heading">
            <h6>Trending</h6>
            <h2>Trending Games</h2>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="main-button">
            <a href="shop">View All</a>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="item">
            <div class="thumb">
              <a href="dbh"><img src="/images/dbh.jpg" alt=""></a>
              <span class="price"><em>₹1,349</em>Free</span>
            </div>
            <div class="down-content">
              <span class="category">Action</span>
              <h4> Detroit Become Human</h4>
              <!-- <a href="dbh"><i class=""></i>-></a> -->
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="item">
            <div class="thumb">
              <a href="cp"><img src="/images/cp.jpg" alt=""></a>
              <span class="price"><em>₹2,999</em>Free</span>
            </div>
            <div class="down-content">
              <span class="category">Action</span>
              <h4>Cyberpunk 2077</h4>
         
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="item">
            <div class="thumb">
              <a href="got"><img src="/images/got.jpg" alt=""></a>
              <span class="price"><em>₹3,999</em>Free</span>
            </div>
            <div class="down-content">
              <span class="category">Thriller</span>
              <h4>GHOST OF TSUSHIMA</h4>
          
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="item">
            <div class="thumb">
              <a href="sm"><img src="/images/sm.jpg" alt=""></a>
              <span class="price"><em>₹3,199</em>Free</span>
            </div>
            <div class="down-content">
              <span class="category">ACTION</span>
              <h4>SPIDER-MAN MILES MORALES </h4>
            
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="section most-played">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="section-heading">
            <h6>TOP GAMES</h6>
            <h2>Most Played</h2>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="main-button">
            <a href="shop">View All</a>
          </div>
        </div>
        <div class="col-lg-2 col-md-6 col-sm-6">
          <div class="item">
            <div class="thumb">
              <a href="pro"><img src="/images/gta.jpg" alt=""></a>
            </div>
            <div class="down-content">
                <span class="category">OPEN WORLD</span>
                <h4>GTA VI</h4>
                <a href="pro">EXPLORE</a>
            </div>
          </div>
        </div>
        <div class="col-lg-2 col-md-6 col-sm-6">
          <div class="item">
            <div class="thumb">
              <a href="fc3"><img src="/images/fc3.jpg" alt=""></a>
            </div>
            <div class="down-content">
                <span class="category">Open World</span>
                <h4>FARCRY 3</h4>
                <a href="fc3">Explore</a>
            </div>
          </div>
        </div>
        <div class="col-lg-2 col-md-6 col-sm-6">
          <div class="item">
            <div class="thumb">
              <a href="sh2"><img src="/images/sh2.jpg" alt=""></a>
            </div>
            <div class="down-content">
                <span class="category">HORROR</span>
                <h4>SILENT HILL 2</h4>
                <a href="sh2">Explore</a>
            </div>
          </div>
        </div>
        <div class="col-lg-2 col-md-6 col-sm-6">
          <div class="item">
            <div class="thumb">
              <a href="sifu"><img src="/images/sifu.jpg" alt=""></a>
            </div>
            <div class="down-content">
                <span class="category">FIGHTING</span>
                <h4>SIFU</h4>
                <a href="sifu">Explore</a>
            </div>
          </div>
        </div>
        <div class="col-lg-2 col-md-6 col-sm-6">
          <div class="item">
            <div class="thumb">
              <a href="pro"><img src="/images/sn.jpg" alt=""></a>
            </div>
            <div class="down-content">
                <span class="category">ADVENTURE </span>
                <h4>SUBNAUTICA </h4>
                <a href="pro">Explore</a>
            </div>
          </div>
        </div>
        <div class="col-lg-2 col-md-6 col-sm-6">
          <div class="item">
            <div class="thumb">
              <a href="pro"><img src="/images/gow.jpg" alt=""></a>
            </div>
            <div class="down-content">
                <span class="category">ADVENTURE</span>
                <h4>GOD OF WAR</h4>
                <a href="pro">Explore</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="section categories">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <div class="section-heading">
            <h6>Categories</h6>
            <h2>Top Categories</h2>
          </div>
        </div>
        <div class="col-lg col-sm-6 col-xs-12">
          <div class="item">
            <h4>ACTION</h4>
            <div class="thumb">
              <a href="uc4"><img src="/images/uc.jpg" alt=""></a>
            </div>
          </div>
        </div>
        <div class="col-lg col-sm-6 col-xs-12">
          <div class="item">
            <h4>ADVENTURE</h4>
            <div class="thumb">
              <a href="shop"><img src="/images/tlou.jpg" alt=""></a>
            </div>
          </div>
        </div>
        <div class="col-lg col-sm-6 col-xs-12">
          <div class="item">
            <h4>BATTLE ROYAL</h4>
            <div class="thumb">
              <a href="shop"><img src="/images/fort.jpg" alt=""></a>
            </div>
          </div>
        </div>
        <div class="col-lg col-sm-6 col-xs-12">
          <div class="item">
            <h4>OPEN WORLD</h4>
            <div class="thumb">
              <a href="pal"><img src="/images/pal.jpg" alt=""></a>
            </div>
          </div>
        </div>
        <div class="col-lg col-sm-6 col-xs-12">
          <div class="item">
            <h4>HORROR</h4>
            <div class="thumb">
              <a href="shop"><img src="/images/ol.jpg" alt=""></a>
            </div>
          </div>
        </div>
      </div>
      </div>
    </div>
  </div>
  
  <!-- <div class="section cta">
    <div class="container">
      <div class="row">
        <div class="col-lg-5">
          <div class="shop">
            <div class="row">
              <div class="col-lg-12">
                <div class="section-heading">
                  <h6>Our Shop</h6>
                  <h2>Go Pre-Order Buy & Get Best <em>Prices</em> For You!</h2>
                </div>
                <p>Lorem ipsum dolor consectetur adipiscing, sed do eiusmod tempor incididunt.</p>
                <div class="main-button">
                  <a href="shop">Shop Now</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-5 offset-lg-2 align-self-end">
          <div class="subscribe">
            <div class="row">
              <div class="col-lg-12">
                <div class="section-heading">
                  <h6>NEWSLETTER</h6>
                  <h2>Get Up To ₹4,000 Off Just Buy <em>Subscribe</em> Newsletter!</h2>
                </div>
                <div class="search-input">
                  <form id="subscribe" action="#">
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Your email...">
                    <button type="submit">Subscribe Now</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> -->

  <footer>
    <div class="container">
      <div class="col-lg-12">
      </div>
    </div>
  </footer>

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