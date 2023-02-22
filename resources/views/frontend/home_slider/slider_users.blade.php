

@php
$homeSlide = App\Models\HomeSlide::all();

///home_slide
@endphp

 <!-- Slider -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
 <!-- Slider -->
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

        <!-- Indicators -->
                                    <ol class="carousel-indicators">
                                        @foreach($homeSlide as $image)
                                            <li data-target="#carousel-example-generic" data-slide-to="{{ $loop->index }}" class="{{ $loop->first ? 'active' : '' }}"></li>
                                        @endforeach
                                    </ol>

                                    <div class="carousel-inner" role="listbox">
                                        @foreach($homeSlide  as $image)
                                            <div class="carousel item @if($loop->first) active @endif">

                                                <img src="{{ $image->home_slide }}" class="d-block img-fluid w-100">

                                            </div>

                                        @endforeach
                                    </div>

                                    <!-- Controls -->
                                    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>

                                </div>

                            </article>
                        </div>
                    </div>

 <!-- Slider -->