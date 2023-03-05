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
      <title>cart</title>
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
      <div class="hero_area">
         <!-- header section strats -->
         <header class="header_section">
            <div class="container">
               @include('sweetalert::alert')
               <nav class="navbar navbar-expand-lg custom_nav-container ">
                  <a class="navbar-brand" href="index.html"><img width="250" src="images/logo.png" alt="#" /></a>
                  
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
                              <li><a href="about.html">About</a></li>
                              <li><a href="testimonial.html">Testimonial</a></li>
                           </ul>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="{{ route('home') }}">Products</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="{{ route('customer_order') }}">Orders</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="{{ route('contact') }}">Contact</a>
                        </li>
                        <li class="nav-item" style="position: relative">
                           <a class="nav-link" href="{{ route('cart') }}">

                              <i class='bx bx-cart-add' style="font-size: 20px; position:relative">
                                 {{-- <span style="position: absolute; top:-12px;left:7px ; color:white; font-weight:bold ;content:''; background-color:red; border-radius:50%;padding:1.5px" >{{ $cart }}</span> --}}
                              </i>
                              {{-- <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 456.029 456.029" style="enable-background:new 0 0 456.029 456.029;" xml:space="preserve">
                                 <g>
                                    <g>
                                       <path d="M345.6,338.862c-29.184,0-53.248,23.552-53.248,53.248c0,29.184,23.552,53.248,53.248,53.248
                                          c29.184,0,53.248-23.552,53.248-53.248C398.336,362.926,374.784,338.862,345.6,338.862z" />
                                    </g>
                                 </g>
                                 <g>
                                 
                                    <g>
                                       <path d="M439.296,84.91c-1.024,0-2.56-0.512-4.096-0.512H112.64l-5.12-34.304C104.448,27.566,84.992,10.67,61.952,10.67H20.48
                                          C9.216,10.67,0,19.886,0,31.15c0,11.264,9.216,20.48,20.48,20.48h41.472c2.56,0,4.608,2.048,5.12,4.608l31.744,216.064
                                          c4.096,27.136,27.648,47.616,55.296,47.616h212.992c26.624,0,49.664-18.944,55.296-45.056l33.28-166.4
                                          C457.728,97.71,450.56,86.958,439.296,84.91z" />
                                    </g>
                                 </g>
                                 <g>
                                    <g>
                                       <path d="M215.04,389.55c-1.024-28.16-24.576-50.688-52.736-50.688c-29.696,1.536-52.224,26.112-51.2,55.296
                                          c1.024,28.16,24.064,50.688,52.224,50.688h1.024C193.536,443.31,216.576,418.734,215.04,389.55z" />
                                    </g>
                                 </g>
                                 <g>
                                 </g>
                                 <g>
                                 </g>
                                 <g>
                                 </g>
                                 <g>
                                 </g>
                                 <g>
                                 </g>
                                 <g>
                                 </g>
                                 <g>
                                 </g>
                                 <g>
                                 </g>
                                 <g>
                                 </g>
                                 <g>
                                 </g>
                                 <g>
                                 </g>
                                 <g>
                                 </g>
                                 <g>
                                 </g>
                                 <g>
                                 </g>
                                 <g>
                                 </g>
                              </svg> --}}
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
{{-- <div class="container d-flex justify-content-between align-items-center">
    <div class="row">
       @foreach ($items as $item )
           
            
      <div class="col " style="margin: auto">
        <div class="card" style="width: 18rem;">

            <img src="{{ asset('storage/images/'.$item->image)}}" class="card-img-top" alt="{{ $item->image }}">
            <div class="card-body">
                @if($item->discount==!null)
              <div class="card-text  " style=""><Span class=" h5 pr-2">Title:</Span>{{ $item->name }}</div>
              <div class="card-text"><span class="h5 pr-2">Category:</span>{{ $item->email }}</div>
              <div class="card-text"><span class="h5 pr-2">Description:</span>{{ $item->address }}</div>
              <div class="card-text text-primary"><span class="h5 pr-2">Price:</span>${{ $item->phone }}</div>
              <div class="card-text text-danger"><span class="h5  pr-2">Discount Price:</span ><span 
                 >${{ $item->discount }}</span></div>
                @else
                <h5 class="card-title"><Span class="pr-2">Title:</Span>{{ $item->title }}</h5>
              <div class="card-text"><span class="h5 pr-2">Category:</span>{{ $item->category }}</div>
              <div class="card-text"><span class="h5 pr-2">Description:</span>{{ $item->description }}</div>
              <div class="card-text text-primary"><span class="h5 pr-2">Price:</span>${{ $item->price }}</div>
          
                @endif
            </div>
          </div>
      </div>
      @endforeach


    
    </div>
    
  </div> --}}
  <div class="container ">

      <div class="table-responsive">


  <table class="table table-bordered ">
   <thead>
      @php
         $i=1;
      @endphp
     <tr>
       <th scope="col">S/n</th>
       <th scope="col">Title</th>
       <th scope="col">Price</th>
       <th scope="col">Quantity</th>
       <th scope="col">Image</th>
       <th scope="col" class="text-center">Action</th>


     </tr>
   </thead>
   <tbody>
      @foreach ($items as $item )
         
     <tr>
       <th scope="row">{{ $i++ }}</th>
       <td>{{ $item->title }}</td>
       <td>NGN {{number_format( $item->price) }}</td>
       <td>{{ number_format( $item->quantity )}}</td>

       <td><img  src="/product/{{ $item->image }}"  class="h-10 w-50 " alt="{{ $item->image }}" 
         height="50%" width="50%" style="height: 50px; width:50px">
       </td>
       <td class="text-center"><a href="{{ route('del',$item->id) }}" class="btn btn-danger">Remove</a></td>
     </tr>
     @endforeach

   </tbody>
 </table>
</div>
@if($total_price=="0")
@else
<h3 class="text-center">Total Amount: NGN {{number_format( $total_price )}}</h3>
<h3 class="text-center">Proceed with your order</h3>

<div class="payment d-flex align-items-center justify-content-center mb-5">
   <a href="{{ route('ordered') }}" onclick="return confirm('Are you sure you are ready to place order?')" class="btn btn-danger mx-3">Cash on delivery </a>
   <a href="{{ route('form',$total_price) }}" class="btn btn-danger mx-3">Payment Card </a>

</div>
@endif
<a href="{{ route('home') }}" class="btn btn-primary">Back to home</a>

</div>
  
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