
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
  <!-- <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div> -->
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
                      <li><a href="addgame">Add Game</a></li>
                       <li><a href="adminlist">Admin List</a></li> 
                       <!-- <li><a href="adminlist">Admin List</a></li> -->
                      <li><a href="gamelist">Game List</a></li> 
                    
                      
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
          <h3>Game List </h3>
          <span class="breadcrumb"><a href="#">Home</a>  >  Game List</span>
        </div>
      </div>
    </div>
  </div>
<br><br>
<div class="container">
  <div class="head" style="padding-top: 50px; text-align: center; text-color: #ffffff;">
  
  
  @if(session('status'))
          <h6 class="alert alert-success">{{session('status')}}</h6>
  @endif
<form method="post" action="search">
    @csrf
      <input type="text" name="name" placeholder="Enter Game Name You Want To Search:">
      <input type="submit" value="Search">
</form>
<br><br>
<table class="table table-striped" align="center" bgcolor="#87CEEB" >
    <tr>
        <th>ID</th>
        <th>GAMENAME</th>
        <th>IMAGE</th>
        <th>CURD</th>
    </tr>
    @foreach($info as $i)
        <tr>
            <!-- <td>{{$i['id']}}</td>     -->
            <td>{{$loop->iteration}}</td>    
            <td>{{$i['name']}}</td>
            <!-- <td>{{$i['image']}}</td> -->
             <td>
              <img src="{{ asset('images/'.$i->image) }}" width="10px" height="150px" alt="Image">
            </td>
            <td>
             @if($i->info_link)
              <a href="{{ url($i->info_link) }}" class="btn btn-primary" target="_blank">Info</a>
            @else
              <span class="text-muted">No Info</span>
            @endif 
            

             <a href="delete_g\{{$i['id']}}" class="btn btn-danger btn-sm">Delete</a>       

            
              <a href="{{ url('editgame/'.$i->id)}}" class="btn btn-primary btn-sm">Update</a>
            </td>
        </tr>
    @endforeach    
</table>
{{$info->links()}}
</div>
<!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script src="/jquery/jquery.min.js"></script>
  <script src="/bootstrap/js/bootstrap.min.js"></script>
  <script src="/js/isotope.min.js"></script>
  <script src="/js/owl-carousel.js"></script>
  <script src="/js/counter.js"></script>
  <script src="/js/custom.js"></script>



<footer>
    <div class="container">
      <div class="col-lg-12">
      </div>
    </div>
  </footer>

