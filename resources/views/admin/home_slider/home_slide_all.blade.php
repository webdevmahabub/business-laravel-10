@extends('admin.admin_master')
@section('admin')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


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
<a href="{{ route('add.slider') }}" class="btn btn-primary">Add Slider</a>                
            </div>
        </div>
    </div>
    <!--end breadcrumb-->


    <hr/>
    
    <div class="card">
        <div class="card-body">

<div class="container">
  <h2>Slider Page</h2>
            
  <table class="table">
    <thead>
      <tr>
         <th>Sl</th>
        <th>Title</th>
        <th>Web Url</th>
        <th>Image</th>
         <th>Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach($homeSlide as $key => $item)   
      <tr>
         <td> {{ $key+1 }} </td>
        <td>{{ $item->title }}</td>
       <td>{{ $item->web_url }}</td>
        <td> <img src="{{ asset($item->home_slide)   }}" height="80px" width="120px" alt="banner" > </img>  </td>
            <td> <a href="{{ route('edit.slider',$item->id) }}" class="btn btn-danger w-sm waves-effect waves-light" >Edit</a>  </td>

            <td> <a href="{{ route('delete.slider',$item->id) }}" class="btn btn-danger w-sm waves-effect waves-light" id="delete" >Delete</a>  </td>

      </tr>
    
     @endforeach
    </tbody>
  </table>
</div>





 </div>
 </div>

  </div>