@extends('layouts.app')

@section('content')
<div class="container-fluid" style="background: #f5f5f5;">
    <!-- <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div> -->


    <!-- Page content -->
    <div class="page-content">

        <!-- Main content -->
        <div class="content-wrapper">

            <!-- Content area -->
            <div class="content d-flex justify-content-center align-items-center" style="padding: 50px 0px;">

                <!-- Login form -->
                 <form method="POST" action="{{ route('login') }}" class="login-form">
                        @csrf
                <!-- <form class="login-form" > -->
                    <div class="card mb-0">
                        <div class="card-body">
                            <div class="text-center mb-3">
                                <i class="fa fa-user" style="border: 2px solid #90a4ae;border-radius: 50px;padding: 13px 19px;font-size: 30px;color: #90a4ae;margin-bottom: 10px;"></i>
                                <h5 class="mb-0">Login as Student</h5>
                                <span class="d-block text-muted">Your credentials</span>
                            </div>

                            <div class="form-group form-group-feedback form-group-feedback-left">
                                <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}"  placeholder="Username" required autocomplete="username" autofocus>
                                <div class="form-control-feedback">
                                    <i class="icon-user text-muted"></i>
                                </div>

                                @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>

                            <div class="form-group form-group-feedback form-group-feedback-left">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" name="password" class="form-control @error('password') is-invalid @enderror">
                                <div class="form-control-feedback">
                                    <i class="icon-lock2 text-muted"></i>
                                </div>

                                @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group d-flex align-items-center">
                                <div class="form-check mb-0">
                                    <label class="form-check-label">
                                        <input type="checkbox" name="remember" class="form-input-styled" checked data-fouc>
                                        Remember
                                    </label>
                                </div>
                                <a href="password_recover.html" class="ml-auto">Forgot password?</a>
                            </div>

                            <div class="form-group">
                                <a href="dashboard.html">
                                    <button type="submit" class="btn btn-primary btn-block" style="background: #1264AF;">
                                        Sign in 
                                        <i class="icon-circle-right2 ml-2"></i>
                                    </button>
                                </a>
                            </div>

                            <div class="form-group text-center text-muted content-divider">
                                <span class="px-2">or sign in with</span>
                            </div>

                            <div class="form-group text-center">
                                <button type="button" class="btn btn-outline bg-pink-300 border-pink-300 text-pink-300 btn-icon rounded-round border-2">
                                    <i class="fa fa-google" style="color: #1264AF;"></i>
                                </button>
                                <button type="button" class="btn btn-outline bg-indigo border-indigo text-indigo btn-icon rounded-round border-2 ml-2">
                                    <i class="fa fa-facebook" style="color: #1264AF;"></i>
                                </button>
                                <button type="button" class="btn btn-outline bg-slate-600 border-slate-600 text-slate-600 btn-icon rounded-round border-2 ml-2">
                                    <i class="fa fa-envelope" style="color: #1264AF;"></i>
                                </button>
                            </div>

                            <div class="form-group text-center text-muted content-divider">
                                <span class="px-2">Don't have an account?</span>
                            </div>

                            <div class="form-group">
                                <a href="registration.html" class="btn btn-light btn-block" style="border: 2px solid #1264AF;background: #fff;">Sign up</a>
                            </div>

                            <span class="form-text text-center text-muted">By continuing, you're confirming that you've read our <a href="#">Terms &amp; Conditions</a> and <a href="#">Cookie Policy</a></span>
                        </div>
                    </div>
                </form>
                <!-- /login form -->
            </div>
            <!-- /content area -->
        </div>
        <!-- /main content -->
    </div>
    <!-- /page content -->
</div>
@endsection
