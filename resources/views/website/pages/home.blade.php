@extends('layouts.app')

    <head>


        <link rel="stylesheet" href="css/etrain/style.css">    

        
        
        
        <style type="text/css">
           
            </style>




    </head>
@section('content')
    {{-- @include('inc.web.carousel') --}}
        @include('inc.web.carousel2')
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

    <!-- <div class="card-body">
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
    </div> -->

    {{-- <hr> <br>

    <!-- End Testimonial -->
    <hr> --}}

    <!-- about us part start-->
    <section class="learning_part">
        <div class="container">
            <div class="row align-items-sm-center align-items-lg-stretch">
                <div class="col-md-7 col-lg-7">
                    <div class="learning_img">
                        <img src="/image/images/learning.png" alt="">
                    </div>
                </div>
                <div class="col-md-5 col-lg-5">
                    <div class="learning_member_text">
                        <h5>Find Tutors For Free</h5>
                        <h2>Search Tutor Here</h2>
                        <!-- <p>Findworka academy is an international 
                            IT institution founded by Findworka with the goal of creating next leading IT gurus in the world</p> -->
                        <!-- <ul>
                            <li><span class="ti-pencil-alt"></span>It was founded to create a platform for students 
                                who are in interested in becoming the next guru in the IT industry. </li>
                            <li><span class="ti-ruler-pencil"></span>To help them grow and bring their dreams to reality
                                night.</li>
                        </ul> -->

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
                                        <button type="submit" class="btn_1">
                                            {{ __('Find Tutor') }}
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <!-- <a href="/about" class="btn_1">Read More</a> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about us part end-->


    <!-- feature_part start-->
    <br> 
    <section class="feature_part">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-xl-3 align-self-center">
                    <div class="single_feature_text ">
                        <h2 style="color:#0B0A49 ">Our people count</h2>
                        <p>Findworka Academy is the best online and offline IT institution
                            that can and will propell you to that big stage you've been 
                        dreaming about in the IT industry </p>
                        <a href="/about#features" class="btn_1">Know More</a>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <div class="single_feature">
                        <div class="single_feature_part">
                            <span class="single_feature_icon"></span>
                            <h4 style="color:#0B0A49 ">Tutors Registered</h4>
                            <h6>100+</h6>
                            <p>Our Tutors are experienced IT gurus who have paid their
                                prices and have been practitcing IT for a long time</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <div class="single_feature">
                        <div class="single_feature_part">
                            <span class="single_feature_icon"></span>
                            <h4 style="color:#0B0A49 ">Active Students</h4>
                            <h6>100+</h6>
                            <p>Our offline classes are held at our conference hall in our company
                                with full cpomfortability for our students</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <div class="single_feature">
                        <div class="single_feature_part single_feature_part_2">
                            <span class="single_service_icon style_icon"></span>
                            <h4 style="color:#0B0A49 ">Enquiries</h4>
                            <h6>100+</h6>
                            <p>We share well explanatory learning resources to our students 
                                and provide full guide on their usage </p>
                        </div>
                    </div>
                </div>
            </div>
            <br> <br> 
        </div>
    </section>
    <!-- feature part end-->






    <!--::BLOG PART start::-->

    <!--::Blog Part end::-->

    
</div>   

    <!-- footer part start-->

    <!-- footer part end-->

    


    
@endsection


   