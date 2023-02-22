
@extends('admin.admin_master')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<div class="page-content"> 
                <!--breadcrumb-->
                <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                    <div class="breadcrumb-title pe-3">Add Slider </div>
                    <div class="ps-3">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0 p-0">
                                <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Add Slider </li>
                            </ol>
                        </nav>
                    </div>
                    <div class="ms-auto">

                    </div>
                </div>
                <!--end breadcrumb-->
                <div class="container">
                    <div class="main-body">
                        <div class="row">

<div class="col-lg-10">
    <div class="card">
        <div class="card-body">

        <form id="myForm" method="post" action="{{ route('update.slider') }}" enctype="multipart/form-data" >
            @csrf

       	<input type="hidden" name="id" value="{{ $slider_edit->id }}">
		 <input type="hidden" name="old_image" value="{{ $slider_edit->home_slide }}">


            <div class="row mb-3">
                <div class="col-sm-3">
                    <h6 class="mb-0">Slider Title</h6>
                </div>
                <div class="form-group col-sm-9 text-secondary">
                    <input type="text" name="title" class="form-control"  value="{{$slider_edit->title }}"  />
                </div>
            </div>

             <div class="row mb-3">
                <div class="col-sm-3">
                    <h6 class="mb-0">Web Url</h6>
                </div>
                <div class="form-group col-sm-9 text-secondary">
                    <input type="text" name="web_url" class="form-control"  value="{{$slider_edit->web_url }}"  />
                </div>
            </div>


            
			<div class="row mb-3">
				<div class="col-sm-3">
					<h6 class="mb-0">Slider Image  </h6>
				</div>
				<div class="col-sm-9 text-secondary">
					<input type="file" name="home_slide" class="form-control"  id="image"   />
				</div>
			</div>



			<div class="row mb-3">
				<div class="col-sm-3">
					<h6 class="mb-0"> </h6>
				</div>
				<div class="col-sm-9 text-secondary">
					 <img id="showImage" src="{{ asset($slider_edit->home_slide) }}" alt="Admin" style="width:100px; height: 100px;"  >
				</div>
			</div>



            <div class="row">
                <div class="col-sm-3"></div>
                <div class="col-sm-9 text-secondary">
                    <input type="submit" class="btn btn-primary px-4" value="Update Slider" />
                </div>
            </div>
        </div>

        </form>



    </div>




                            </div>
                        </div>
                    </div>
                </div>
            </div>






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