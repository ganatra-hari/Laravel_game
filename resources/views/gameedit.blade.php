
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
                    <li><a href="home">Home</a></li>
                      <li><a href="shop">Our Shop</a></li>
                      <!-- <li><a href="adminlist">Admin List</a></li> -->
                      <li><a href="gamelist">Game List</a></li>
                      <li><a href="signup"> Game Details Updating...</a></li>
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
          <h3>Update Game</h3>
          <span class="breadcrumb"><a href="#">Home</a>  >  Update Game</span>
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
    <form  method="post" action="{{url('updategame/'.$game->id)}}" enctype="multipart/form-data">
    @csrf
    @method('put')
    <div class="form-group">
 
  <br><br>
  <div class="mb-3">
  <label for="formFile" class="form-label">Enter Game Image:</label>
  <input class="form-control" type="file" id="formFile" name="image" >
  <img src="{{ asset('images/'.$game->image) }}" width="10px" height="150px" alt="Image"> <br><br>
 
  <label for="info_link">Info Link</label>
  <input type="text" name="info_link"  placeholder="/game/1/details" value="{{ $game->info_link  }}" required/>
</div>


</div>

<label>Enter Game Name:</label><br>
<input type="text" name="name" value="{{ $game->name }}" required><br><br>

<label>Enter Game Description:</label><br>
<input type="text" name="description"value="{{ $game->description }}" required><br><br>

<label>Enter Game Price:</label><br>
<input type="integer" name="price" value="{{ $game->price }}" required><br><br>

<label>Enter Available Quantity:</label><br>
<input type="integer" name="quantity" value="{{ $game->quantity }}" required><br><br>

<label>Enter Game Categorie:</label><br>
<input type="text" name="category" value="{{ $game->category }}" required><br><br>

<label>Enter Game Type:</label><br>
<input type="text" name="type" value="{{ $game->type }}" required><br><br>

<input type="submit" name="submit" class="btn btn-info btn-lg">

</form>   
  


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