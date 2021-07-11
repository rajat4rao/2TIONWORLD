@extends('layouts.app')

    <head>


        <link rel="stylesheet" href="css/etrain/style.css">    

        
        
        
        <style type="text/css">
           
            </style>




    </head>
@section('content')
    {{-- @include('inc.web.carousel') --}}

    {{-- @include('inc.web.carousel3') --}}



    <!--::header part start::-->
  
    <!-- Header part end-->


    <!-- banner part start-->
  
    <!-- banner part start-->

<div class="container"> 
    <!-- feature_part start-->

    <!--::programmes_part end::-->


    <!-- learning part start-->
    
    <!-- learning part end-->
    

    <!--::review_part start::-->
    
    <!--::blog_part end::-->


    <br> <br> <br> <br> <br> <br> <br>

    <!-- TESTIMONIAL START -->

    <div class="card-body">
        <form method="POST" action="{{ action('Auth\RegisterController@storeRegistrationForm') }}">
            @csrf

            <div class="form-group row">

                <div class="col-md-6">
                    <input id="keywords" type="text" class="form-control @error('keywords') is-invalid @enderror" name="keywords"  placeholder="Keywords" required autofocus>

                    @error('keywords')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">

                <div class="col-md-6">
                    <input id="location" type="text" class="form-control @error('location') is-invalid @enderror" name="location" placeholder="Location" value="{{ old('location') }}"  autofocus>

                    @error('location')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="form-group row mb-0">
                <div class="col-md-6 offset-md-4">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Find Tutor') }}
                    </button>
                </div>
            </div>
        </form>
    </div>

    {{-- <hr> <br>

    <!-- End Testimonial -->
    <hr> --}}





    <!--::BLOG PART start::-->

    <!--::Blog Part end::-->

    
</div>   

    <!-- footer part start-->

    <!-- footer part end-->

    


    
@endsection


   