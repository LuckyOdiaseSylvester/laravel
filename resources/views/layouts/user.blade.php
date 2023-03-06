<!DOCTYPE html>
<html>
   <head>
      <!-- Basic -->
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <!-- Mobile Metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <!-- Site Metas -->
      <meta name="keywords" content="" />
      <meta name="description" content="" />
      <meta name="author" content="" />
      <link rel="shortcut icon" href="images/favicon.png" type="">
      <title>@yield('title')</title>
      <!-- bootstrap core css -->
      <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
      <!-- font awesome style -->
      <link href="css/font-awesome.min.css" rel="stylesheet" />
      <!-- Custom styles for this template -->
      <link href="css/style.css" rel="stylesheet" />
      <!-- responsive style -->
      <link href="css/responsive.css" rel="stylesheet" />
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
      <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

   </head>
   <body>
      @include('sweetalert::alert')
      <div class="hero_area">
         <!-- header section strats -->
         <header class="header_section">
            <div class="container">
               <nav class="navbar navbar-expand-lg custom_nav-container ">
                  <a class="navbar-brand" href="{{ route('home') }}"><img width="250" src="images/logo.png" alt="#" /></a>
                  
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class=""> </span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                     <ul class="navbar-nav">
                        <li class="nav-item active">
                           <a class="nav-link" href="{{ route('home') }}">Home <span class="sr-only">(current)</span></a>
                        </li>
                       <li class="nav-item dropdown">
                           <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"> <span class="nav-label">Pages <span class="caret"></span></a>
                           <ul class="dropdown-menu">
                              <li><a href="{{ route('home') }}">About</a></li>
                              <li><a href="{{ route('home') }}">Testimonial</a></li>
                           </ul>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="{{ route('home') }}">Products</a>
                        </li>
                        <li class="nav-item">
                         @auth
                         <a class="nav-link" href="{{ route('customer_order') }}">Orders {{ $number_order }}</a>
                         @endauth
                              <a class="nav-link" href="{{ route('customer_order') }}">Orders</a>

                       
                              
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="{{ route('contact') }}">Contact</a>
                        </li>
                        <li class="nav-item" style="position: relative">
                           <a class="nav-link" href="{{ route('cart') }}">

                              <i class='bx bx-cart-add' style="font-size: 20px; position:relative">
                              </i>
                              
                           </a>
                        </li>
                       
                        <form class="form-inline">
                           <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit">
                           <i class="fa fa-search" aria-hidden="true"></i>
                           </button>
                        </form>
                        @guest
                        <li class="nav-item">
                            <a href="{{ route('register') }}"  class="nav-link active">Registration</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('login') }}"  class="nav-link">Login</a>
                        </li>
                        @else
                        <li class="nav-item">
                            <a href="#"  class="nav-link" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">Logout</a>
                        </li>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>                
                        @endguest   
                     </ul>
                  </div>
               </nav>
            </div>
         </header>
         <!-- end header section -->
         @yield('content')
         
      <!-- footer start -->
      <footer>
        <div class="container">
           <div class="row">
              <div class="col-md-4">
                  <div class="full">
                     <div class="logo_footer">
                       <a href="#"><img width="210" src="images/logo.png" alt="#" /></a>
                     </div>
                     <div class="information_f">
                       <p><strong>ADDRESS:</strong> 28 White tower, Street Name New York City, USA</p>
                       <p><strong>TELEPHONE:</strong> +91 987 654 3210</p>
                       <p><strong>EMAIL:</strong> yourmain@gmail.com</p>
                     </div>
                  </div>
              </div>
              <div class="col-md-8">
                 <div class="row">
                 <div class="col-md-7">
                    <div class="row">
                       <div class="col-md-6">
                    <div class="widget_menu">
                       <h3>Menu</h3>
                       <ul>
                          <li><a href="#">Home</a></li>
                          <li><a href="#">About</a></li>
                          <li><a href="#">Services</a></li>
                          <li><a href="#">Testimonial</a></li>
                          <li><a href="#">Blog</a></li>
                          <li><a href="#">Contact</a></li>
                       </ul>
                    </div>
                 </div>
                 <div class="col-md-6">
                    <div class="widget_menu">
                       <h3>Account</h3>
                       <ul>
                          <li><a href="#">Account</a></li>
                          <li><a href="#">Checkout</a></li>
                          {{-- @guest
                          <li class="nav-item">
                              <a href="{{ route('register') }}"  class="nav-link active">Registration</a>
                          </li>
                          <li class="nav-item">
                              <a href="{{ route('login') }}"  class="nav-link">Login</a>
                          </li>
                          @else
                          <li class="nav-item">
                              <a href="#"  class="nav-link" onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">Logout</a>
                          </li>
                          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                              @csrf
                          </form>                
                          @endguest    --}}
               
                          <li><a href="#">Shopping</a></li>
                          <li><a href="#">Widget</a></li>
                       </ul>
                    </div>
                 </div>
                    </div>
                 </div>     
                 <div class="col-md-5">
                    <div class="widget_menu">
                       <h3>Newsletter</h3>
                       <div class="information_f">
                         <p>Subscribe by our newsletter and get update protidin.</p>
                       </div>
                       <div class="form_sub">
                          <form>
                             <fieldset>
                                <div class="field">
                                   <input type="email" placeholder="Enter Your Mail" name="email" />
                                   <input type="submit" value="Subscribe" />
                                </div>
                             </fieldset>
                          </form>
                       </div>
                    </div>
                 </div>
                 </div>
              </div>
           </div>
        </div>
     </footer>
     <!-- footer end -->
     <div class="cpy_">
        <p class="mx-auto">© 2021 All Rights Reserved By <a href="https://html.design/">Free Html Templates</a><br>
        
           Distributed By <a href="https://themewagon.com/" target="_blank">ThemeWagon</a>
        
        </p>
     </div>
     <!-- jQery -->
     <script src="js/jquery-3.4.1.min.js"></script>
     <!-- popper js -->
     <script src="js/popper.min.js"></script>
     <!-- bootstrap js -->
     <script src="js/bootstrap.js"></script>
     <!-- custom js -->
     <script src="js/custom.js"></script>
  </body>
</html>