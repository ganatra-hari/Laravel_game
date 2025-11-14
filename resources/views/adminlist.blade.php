
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
                      <li><a href="signup">Add User</a></li>
                      <li><a href="a_signup">Add Admin</a></li>
                      <li><a href="userlist">User List</a></li>
                      <li><a href="adminlist">Admin List</a></li>
                   
                      
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
          <h3>Admin List </h3>
          <span class="breadcrumb"><a href="#">Home</a>  >  Admin List</span>
        </div>
      </div>
    </div>
  </div>
<br><br>
<div class="container">
  <div class="head" style="padding-top: 50px; text-align: center; text-color: #ffffff;">
  
  

<form method="post" action="search_admin">
    @csrf
      <input type="email" name="adminname" placeholder="Enter Admin Name You Want To Search:">
      <input type="submit" value="Search">
</form>
<br><br>
<table class="table table-striped" align="center" bgcolor="#87CEEB" >
    <tr>
        <th>ID</th>
        <th>USERNAME</th>
        <th>PASSWORD</th>
        <th>CURD</th>
    </tr>
    @foreach($admin as $i)
        <tr>
            <!-- <td>{{$i['id']}}</td>     -->
            <td>{{$loop->iteration}}</td>    
            <td>{{$i['adminname']}}</td>
            <td>{{$i['a_password']}}</td>
            <td><a href="delete_a\{{$i['id']}}" class="btn btn-danger btn-sm">Delete</a>
            <a href="a_update/{{$i['id']}}" class="btn btn-primary btn-sm">Update</a></td>
        </tr>
    @endforeach    
</table>
{{$admin->links()}}
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

