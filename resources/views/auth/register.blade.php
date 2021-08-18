@extends('layouts.app')

@section('content')




<!-- Registration Design -->
<!-- Page content -->
    <div class="page-content" style="background: #f5f5f5;">

        <!-- Main content -->
        <div class="content-wrapper">

            <!-- Content area -->
            <div class="content d-flex justify-content-center align-items-center" style="padding: 50px 0px;">

                <!-- Registration form -->
                <form method="POST" class="flex-fill" action="{{ action('Auth\RegisterController@storeRegistrationForm') }}">
                    @csrf
                    <div class="row">
                        <div class="col-lg-6 offset-lg-3">
                            <div class="card mb-0">
                                <div class="card-body">
                                    <div class="text-center mb-3">
                                        <i class="fa fa-user-plus" style="border: 2px solid #90a4ae;border-radius: 50px;padding: 12px;font-size: 30px;color: #90a4ae;margin-bottom: 10px;"></i>
                                        <h5 class="mb-0">Create account</h5>
                                        <span class="d-block text-muted">All fields are required</span>
                                    </div>

                                    <form method="POST" action="{{ action('Auth\RegisterController@storeRegistrationForm') }}">
                                    @csrf


                                    <div class="form-group form-group-feedback form-group-feedback-right">
                                        
                                
                                        <input type="text" class="form-control @error('username') is-invalid @enderror" placeholder="Choose username" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus="">
                                        <div class="form-control-feedback">
                                            <i class="icon-user-plus text-muted"></i>
                                        </div>
                                        @error('username')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror

                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group form-group-feedback form-group-feedback-right">
                                                <input id="first_name" type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" value="{{ old('first_name') }}" required autocomplete="first_name" autofocus placeholder="First Name">
                                                <div class="form-control-feedback">
                                                    <i class="icon-user-check text-muted"></i>
                                                </div>

                                                @error('first_name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group form-group-feedback form-group-feedback-right">
                                                <input id="last_name" type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" required autocomplete="last_name" autofocus placeholder="Second Name">
                                                <div class="form-control-feedback">
                                                    <i class="icon-user-check text-muted"></i>
                                                </div>

                                                 @error('last_name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group form-group-feedback form-group-feedback-right">
                                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" value="{{ old('password') }}" required autocomplete="password" autofocus placeholder="Password">

                                                <div class="form-control-feedback">
                                                    <i class="icon-user-lock text-muted"></i>
                                                </div>

                                                 @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group form-group-feedback form-group-feedback-right">
                                              

                                                <input id="confirm-password" type="password" class="form-control @error('c-password') is-invalid @enderror" name="confirm-password" value="{{ old('confirm-password') }}" required autocomplete="confirm-password" autofocus placeholder="Confirm Password">
                                                <div class="form-control-feedback">
                                                    <i class="icon-user-lock text-muted"></i>
                                                </div>

                                                @error('confirm-password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group form-group-feedback form-group-feedback-right">
                                                
                                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="E-Mail">


                                                <div class="form-control-feedback">
                                                    <i class="icon-mention text-muted"></i>
                                                </div>

                                                 @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group form-group-feedback form-group-feedback-right">

                                                <input id="phone_number" type="text" class="form-control @error('e') is-invalid @enderror" name="phone_number" value="{{ old('phone_number') }}" required autocomplete="phone_number" autofocus placeholder="Mobile Number">


                                                <div class="form-control-feedback">
                                                    <i class="icon-mention text-muted"></i>
                                                </div>

                                                @error('phone_number')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror    

                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group form-group-feedback form-group-feedback-right">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="role" id="tutor">
                                         <label class="form-check-label" for="tutor">
                                            Tutor
                                          </label>    
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="role" id="student" checked>
                                        <label class="form-check-label" for="student">
                                            Student
                                          </label>    
                                        </div>
                                          
                                    </div>

                                    <div class="form-group">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-input-styled" data-fouc>
                                                Accept <a href="#" data-toggle="modal" data-target="#exampleModalLong">terms of service</a>
                                            </label>
                                        </div>
                                    </div>

                                    <button type="submit" class="btn bg-teal-400 btn-labeled btn-labeled-right" style="background: #1264AF;color: #fff;width: 100%;">
                                        <b><i class="icon-plus3"></i></b> Create account</button>
                                </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <!-- /registration form -->

            </div>
            <!-- /content area -->



        </div>
        <!-- /main content -->

    </div>
    <!-- /page content -->
<!-- /Registration Design -->



<!-- Modal -->
<!-- Modal -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        djksdfn asdfjaskdfjas fdlaskdjf laskjdf aslkdfj laksjdf laskjdf alskdjfa slkdjf laskdjf lkasdjf lsakdjf aslkdfjalskdjf laksdjf lkasdjf aslkd
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>


@endsection
