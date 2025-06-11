<!DOCTYPE html>
<html>
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Açai&Cia</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- font css -->
      <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700&display=swap" rel="stylesheet">
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      @livewireStyles
   </head>
   <body>


      <div class="header_section">
         <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
               <a class="navbar-brand"href="index.html"><img src="images/logo.png"></a>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav ml-auto">
                     <li class="nav-item active">
                        <a class="nav-link {{ request()->routeIs('home') ? 'active' : ''}}" @if(request()->routeIs('home')) aria-current="page" @endif href="{{route('home')}}">Home</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="about.html">About</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="icecream.html">Icecream</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="services.html">Services</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="blog.html">Blog</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="contact.html">Contact Us</a>
                     </li>
                  </ul>
                  <form class="form-inline my-2 my-lg-0">
                     <div class="login_bt"><a class="nav-link {{ request()->routeIs('login') ? 'active' : ''}}"  @if(request()->routeIs('login')) aria-current="page" @endif href="{{route('login')}}" href="">Login <span style="color: #222222;"><i class="fa fa-user" aria-hidden="true"></i></span></a></div>
                     <div class="fa fa-search form-control-feedback"></div>
                  </form>
               </div>
            </nav>
         </div>

<div class="banner_section layout_padding">
            <div class="container">
               <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                  <ol class="carousel-indicators">
                     <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active">01</li>
                     <li data-target="#carouselExampleIndicators" data-slide-to="1">02</li>
                     <li data-target="#carouselExampleIndicators" data-slide-to="2">03</li>
                     <li data-target="#carouselExampleIndicators" data-slide-to="3">04</li>
                  </ol>
                  <div class="carousel-inner">
                     <div class="carousel-item active">
                        <div class="row">
                           <div class="col-sm-6">
                              <h1 class="banner_taital">Ice Cream</h1>
                              <p class="banner_text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem</p>
                              <div class="started_text"><a href="#">Order Now</a></div>
                           </div>
                           <div class="col-sm-6">
                              <div class="banner_img"><img src="images/banner-img.png"></div>
                           </div>
                        </div>
                     </div>
                     <div class="carousel-item">
                        <div class="row">
                           <div class="col-sm-6">
                              <h1 class="banner_taital">Ice Cream</h1>
                              <p class="banner_text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem</p>
                              <div class="started_text"><a href="#">Order Now</a></div>
                           </div>
                           <div class="col-sm-6">
                              <div class="banner_img"><img src="images/banner-img.png"></div>
                           </div>
                        </div>
                     </div>
                     <div class="carousel-item">
                        <div class="row">
                           <div class="col-sm-6">
                              <h1 class="banner_taital">Ice Cream</h1>
                              <p class="banner_text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem</p>
                              <div class="started_text"><a href="#">Order Now</a></div>
                           </div>
                           <div class="col-sm-6">
                              <div class="banner_img"><img src="images/banner-img.png"></div>
                           </div>
                        </div>
                     </div>
                     <div class="carousel-item">
                        <div class="row">
                           <div class="col-sm-6">
                              <h1 class="banner_taital">Ice Cream</h1>
                              <p class="banner_text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem</p>
                              <div class="started_text"><a href="#">Order Now</a></div>
                           </div>
                           <div class="col-sm-6">
                              <div class="banner_img"><img src="images/banner-img.png"></div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- banner section end -->
      </div>


         <div class="container">
          @yield('content')
         </div>
      </div>

      
    @livewireScripts
   </body>
</html>