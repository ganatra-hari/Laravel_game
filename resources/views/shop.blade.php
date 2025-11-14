<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="/css/font.css" rel="stylesheet">


    <title>Bolt Gaming - Shop Page</title>

    <!-- Bootstrap core CSS -->
    <link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="/css/fontawesome.css">
    <link rel="stylesheet" href="/css/templatemo-lugx-gaming.css">
    <link rel="stylesheet" href="/css/owl.css">
    <link rel="stylesheet" href="/css/animate.css">
    <link rel="stylesheet" href="/css/bundle.css"/>



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
                        <img src="/images/logo.png" alt="" style="width: 158px;">
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                      <li><a href="home">Home</a></li>
                      <li><a href="shop" class="active">Our Shop</a></li>
                      <li><a href="pro">Product Details</a></li>
                      <li><a href="con">Contact Us</a></li>
                      <li><a href="#">Sign In</a></li>
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
          <h3>Our Shop</h3>
          <span class="breadcrumb"><a href="#">Home</a> > Our Shop</span>
        </div>
      </div>
    </div>
  </div>

  <div class="section trending">
    <div class="container">
      <ul class="trending-filter">
        <li>
          <a class="is_active" href="#!" data-filter="*">Show All</a>
        </li>
        <li>
          <a href="#!" data-filter=".adv">Adventure</a>
        </li>
        <li>
          <a href="#!" data-filter=".best_seller">Best Seller</a>
        </li>
        <li>
          <a href="#!" data-filter=".latest">Latest</a>
        </li>
        <li>
          <a href="#!" data-filter=".hor">Horror</a>
        </li>
        <li>
          <a href="#!" data-filter=".mul">Multi Player</a>
        </li>
        <li>
          <a href="#!" data-filter=".act">Action</a>
        </li>
      </ul>

      <div class="row trending-box">
  @foreach($allGames as $item)
    <div class="col-lg-3 col-md-6 trending-items {{ $item->type }}">
      <div class="item">
        <div class="product_item">
          <img src="{{ asset('images/' . $item->image) }}" alt="{{ $item->name }}" class="product_item pic">
          <span class="price">₹{{ $item->price }}</span>
        </div>
        <div class="down-content">
          <span class="category">{{ $item->category }}</span>
          <h4>{{ $item->name }}</h4>
          <a href="{{ $item->info_link }}">-></a>
        </div>
      </div>
    </div>
  @endforeach
</div>


     
<!--       
        
        <div class="col-lg-3 col-md-6 align-self-center mb-30 trending-items col-md-6 act mul">
          <div class="item">
            <div class="thumb">
              <a href="jf"><img src="/images/jf.jpg" alt=""></a>
              <span class="price"><em>₹4,999</em>Free</span>
            </div>
            <div class="down-content">
              <span class="category">ADVENTURE</span>
              <h4>JUMP FORCE</h4>
              <a href="jf"><i class=""></i></a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 align-self-center mb-30 trending-items col-md-6 act adv mul">
          <div class="item">
            <div class="thumb">
              <a href="gta5"><img src="/images/gtav.jpg" alt=""></a>
              <span class="price"><em>₹1,160</em>Free</span>
            </div>
            <div class="down-content">
              <span class="category">ACTION</span>
              <h4>GTA V</h4>
              <a href="gta5"><i class=""></i></a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 align-self-center mb-30 trending-items col-md-6 act hor">
          <div class="item">
            <div class="thumb">
              <a href="re4"><img src="/images/re4.jpg" alt=""></a>
              <span class="price"><em>₹2,619</em>Free</span>
            </div>
            <div class="down-content">
              <span class="category">HORROR</span>
              <h4>Resident Evil 4</h4>
              <a href="re4"><i class=""></i></a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 align-self-center mb-30 trending-items col-md-6 act mul">
          <div class="item">
            <div class="thumb">
              <a href="w3"><img src="/images/w3.jpg" alt=""></a>
              <span class="price"><em>₹999</em>Free</span>
            </div>
            <div class="down-content">
              <span class="category">ACTION</span>
              <h4>THE WITCHER 3 </h4>
              <a href="w3"><i class=""></i></a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 align-self-center mb-30 trending-items col-md-6 act">
          <div class="item">
            <div class="thumb">
              <a href="sekiro"><img src="/images/sekiro.jpg" alt=""></a>
              <span class="price"><em>₹4,997</em>Free</span>
            </div>
            <div class="down-content">
              <span class="category">Action</span>
              <h4>Sekiro: Shadow Die Twice</h4>
              <a href="sekiro"><i class=""></i></a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 align-self-center mb-30 trending-items col-md-6 act">
          <div class="item">
            <div class="thumb">
              <a href="er"><img src="/images/er.jpg" alt=""></a>
              <span class="price"><em>₹3,599</em>Free</span>
            </div>
            <div class="down-content">
              <span class="category">Action</span>
              <h4>Elden Ring</h4>
              <a href="er"><i class=""></i></a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 align-self-center mb-30 trending-items col-md-6 adv act">
          <div class="item">
            <div class="thumb">
              <a href="dbz"><img src="/images/dbz.jpg" alt=""></a>
              <span class="price"><em>₹2,999</em>Free</span>
            </div>
            <div class="down-content">
              <span class="category">ADVENTURE</span>
              <h4>DRAGON BALL Z : KAKAROT</h4>
              <a href="dbz"><i class=""></i></a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 align-self-center mb-30 trending-items col-md-6 act adv mul">
          <div class="item">
            <div class="thumb">
              <a href="rdd"><img src="/images/rdd.jpg" alt=""></a>
              <span class="price"><em>₹3,799</em>Free</span>
            </div>
            <div class="down-content">
              <span class="category">Action</span>
              <h4>Red Dead Redemption</h4>
              <a href="rdd"><i class=""></i></a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 align-self-center mb-30 trending-items col-md-6 act mul">
          <div class="item">
            <div class="thumb">
              <a href="pro"><img src="/images/taken.jpg" alt=""></a>
              <span class="price"><em>₹3,499</em>Free</span>
            </div>
            <div class="down-content">
              <span class="category">ACTION</span>
              <h4>TEKKEN 7</h4>
              <a href="pro"><i class=""></i></a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 align-self-center mb-30 trending-items col-md-6 hor mul">
          <div class="item">
            <div class="thumb">
              <a href="pp"><img src="/images/pp.jpg" alt=""></a>
              <span class="price"><em>₹3,499</em>Free</span>
            </div>
            <div class="down-content">
              <span class="category">Horror</span>
              <h4>Phasmophobia</h4>
              <a href="pp"><i class=""></i></a>
            </div>
          </div>
        </div>
      </div> -->













      <!-- <div class="col-lg-3 col-md-6 align-self-center mb-30 trending-items col-md-6 hor">
          <div class="item">
            <div class="thumb">
              <a href="cp"><img src="/images/cp.jpg" alt=""></a>
              <span class="price"><em>₹2,999</em>Free</span>
            </div>
            <div class="down-content">
              <span class="category">Action</span>
              <h4>Cyberpunk 2077</h4>
              <a href="cp"><i class=""></i></a>
            </div>
          </div>
        </div>
      </div> -->
      
   
   
      <!-- <div class="row">
        <div class="col-lg-12">
          <ul class="pagination">
          <li><a href="#"> &lt; </a></li>
            <li><a class="is_active" href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#"> &gt; </a></li>
          </ul>
        </div>
      </div>
    </div> 
  </div>  -->

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