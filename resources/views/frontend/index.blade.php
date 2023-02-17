@extends('frontend.master')

@section('main')
    
 
 
@php
$allSlide = App\Models\HomeSlide::orderBy('home_slide','ASC')->get();
@endphp

 <!-- banner -->
 @foreach ($allSlide as $item)
 <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
   <div class="carousel-inner">
     <div class="carousel-item active">

   
          
   
       <img class="d-block w-100" src="{{ $item->home_slide }}" alt=" slide">
     </div>
     
    
   </div>
 

   <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
     <span class="carousel-control-prev-icon" aria-hidden="true"></span>
     <span class="sr-only">Previous</span>
   </a>
   <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
     <span class="carousel-control-next-icon" aria-hidden="true"></span>
     <span class="sr-only">Next</span>  
     @endforeach
   </a>
 </div>
 <!-- end banner -->


 <!-- about -->
 <div id="about"  class="about">
    <div class="container">
       <div class="row d_flex">
          <div class="col-md-7">
             <div class="titlepage">
                <h2>Web Development</h2>
                <span></span>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo </p>
                <a class="read_more">Read More <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
             </div>
          </div>
          <div class="col-md-5">
             <div class="about_img">
                <figure><img src="{{ asset('frontend/assets/images/about_img.png') }} " alt="#"/></figure>
             </div>
          </div>
       </div>
    </div>
 </div>
 <!-- end about -->
 <!-- mobile -->
 <div id="mobile"  class="mobile">
    <div class="container">
       <div class="row d_flex">
          <div class="col-md-5">
             <div class="mobile_img">
                <figure><img src="{{ asset('frontend/assets/images/mobile.png') }}" alt="#"/></figure>
             </div>
          </div>
          <div class="col-md-7">
             <div class="titlepage">
                <h2>Mobile App Development</h2>
                <span></span>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo </p>
                <a class="read_more">Read More <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
             </div>
          </div>
       </div>
    </div>
 </div>
 <!-- end mobile -->



 @endsection