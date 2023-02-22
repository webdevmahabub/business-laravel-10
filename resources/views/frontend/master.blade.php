

<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>blueneek</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">  
      <!-- bootstrap css   -->
      <link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap.min.css')}}">
      <!-- style css -->
      <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css') }}">







      <!-- Responsive-->
      <link rel="stylesheet" href="{{ asset('frontend/assets/css/responsive.css') }}">
      <!-- fevicon -->
      <link rel="icon" href="{{ asset('frontend/assets/images/fevicon.png') }}" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="{{ asset('frontend/assets/css/jquery.mCustomScrollbar.min.css') }}">
      <!-- Tweaks for older IEs-->

        <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
   
   </head>
   <!-- body -->
   <body class="main-layout">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="{{ asset('frontend/assets/images/loading.gif') }}" alt="#" /></div>
      </div>
      <!-- end loader -->
      <!-- header -->
      <header>
         <!-- header inner -->
         <div class="header">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                     <div class="full">
                        <div class="center-desk">
                           <div class="logo">
                              <a href="index.html"><img src="{{ asset('frontend/assets/images/logo.png') }}" width="120px" height="80px" alt="#" /></a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                     <div class="header_information">
                        <nav class="navigation navbar navbar-expand-md navbar-dark ">
                           <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                           <span class="navbar-toggler-icon"></span>
                           </button>
                           <div class="collapse navbar-collapse" id="navbarsExample04">
                              <ul class="navbar-nav mr-auto">
                                 <li class="nav-item active">
                                    <li class="nav-item ">
                                       <a class="nav-link" href="/"> Home  </a>
                                    </li> 
                                    <a class="nav-link" href="about.html"> About Us  </a>
                                 </li> 
                                 <li class="nav-item">
                                    <a class="nav-link" href="clients.html">Our Clients</a>
                                 </li>
                                 <li class="nav-item">
                                    <a class="nav-link" href="ourwork.html">Our Work</a>
                                 </li>
                                 <li class="nav-item">
                                    <a class="nav-link" href="contact.html"> Blog</a>
                                 </li>
                                 <li class="nav-item">
                                    <a class="nav-link" href="contact.html">Contact Us</a>
                                 </li>

                                 
                              </ul>
                              {{-- <div class="sign_btn"><a href="#">Get A Quote</a></div> --}}
                           </div>
                        </nav>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <!-- end header inner -->
      <!-- end header -->
     




@yield('main')




      <!--  footer -->
      <footer>
         <div class="footer">
            <div class="container">
               <div class="row border-top">
                  <div class="col-md-6 padding_bottom1   ">
                     <h3>Subscribe Now</h3>
                     <form class="footer_form">
                        <input class="enter" placeholder="Enter your email" type="type" name="Enter your email">
                        <button class="submit">submit</button>
                     </form>
                  </div>
                  <div class="col-md-6">
                     <div class="row">
                        <div class="col-md-5 offset-md-1 padding_bottom1">
                           <h3>Links</h3>
                           <ul class="cont">
                              <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do </li>
                           </ul>
                        </div>
                        <div class="col-md-5 offset-md-1">
                           <h3>Contact us</h3>
                           <ul class="cont">
                              <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do </li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="copyright">
               <div class="container">
                  <div class="row">
                     <div class="col-md-12"><div class="footer-icons">
      <a href="https://www.facebook.com/" class="generic-anchor" target="_blank"><i class="fa fa-facebook"></i></a>
      <a href="https://twitter.com/" class="generic-anchor" target="_blank"><i class="fa fa-twitter"></i></a>
      <a href="http://instagram.com/" class="generic-anchor" target="_blank"><i class="fa fa-instagram"></i></a>
      <a href="https://www.youtube.com/" class="generic-anchor" target="_blank"><i class="fa fa-youtube"></i></a>
   
      </div>
                        <p>© 2023 All Rights Reserved. <a href="https://greenviewsoft.com/"> GreenViewSoft</a></p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <!-- end footer -->
      <!-- Javascript files-->
      <script src="{{ asset('frontend/assets/js/jquery.min.js') }}"></script>
      <script src="{{ asset('frontend/assets/js/popper.min.js') }}"></script>
      <script src="{{ asset('frontend/assets/js/bootstrap.bundle.min.js') }}"></script>
      <script src="{{ asset('frontend/assets/js/jquery-3.0.0.min.js') }}"></script>
    
      <!-- sidebar -->
      <script src="{{ asset('frontend/assets/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
      <script src="{{ asset('frontend/assets/js/custom.js') }}"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>  







   </body>
</html>

