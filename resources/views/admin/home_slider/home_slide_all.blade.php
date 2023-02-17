@extends('admin.admin_master')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

<div class="page-content">
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">All Slider</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">All Slider</li>
                </ol>
            </nav>
        </div>
        <div class="ms-auto">
            <div class="btn-group">
<a href="" class="btn btn-primary">Add Slider</a> 				 
            </div>
        </div>
    </div>
    <!--end breadcrumb-->

    <hr/>
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
<tr>
    <th>Sl</th>
    <th>Slider Title </th>
    <th>Web Url </th>
    <th>Slider Image </th>
    <th>Action</th> 
</tr>
</thead>
<tbody>
@foreach($homeSlide as $key => $item)		
<tr>
    <td> {{ $key+1 }} </td>
    <td>{{ $item->title }}</td>
    <td>{{ $item->web_url }}</td>
    <td> <img src="{{ asset($item->home_slide) }}" style="width: 70px; height:40px;" >  </td>

    <td>


    </td> 
</tr>
@endforeach
    
    <script type="text/javascript">
        
        $(document).ready(function(){
            $('#image').change(function(e){
                var reader = new FileReader();
                reader.onload = function(e){
                    $('#showImage').attr('src',e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });
    </script>
    
    @endsection 