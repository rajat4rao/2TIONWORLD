<!-- <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            {{-- config('app.name', 'Findworka Academy') --}}
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
             Left Side Of Navbar 
            <ul class="navbar-nav mr-auto">

            </ul>


             Right Side Of Navbar 
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/role') }}">{{ __('Register') }}</a>
                    </li>
                </ul>        

            
        </div>
    </div>
</nav> -->

<!-- Multiple fixed navbars wrapper -->
<div class="fixed-top">

    <!-- Main navbar -->
    <div class="navbar navbar-expand-md navbar-dark">
        <div class="navbar-brand" style="padding: 8px 0px;">
            <a href="index.html" class="d-inline-block">
                <h3 style="font-weight: 800;font-size: 20px;margin: 0px;color: #fff;">2tionworld</h3>
            </a>
        </div>

        

        <div class="collapse navbar-collapse" id="navbar-mobile">
            <ul class="navbar-nav">


                
            </ul>

            <span class="badge bg-success ml-md-3 mr-md-auto">Find your favourate tutor</span>

            <ul class="navbar-nav">
                

                <li class="nav-item ">
                    <a href="#" class="navbar-nav-link dropdown-toggle caret-0" data-toggle="dropdown">
                        
                        <span class=" ml-2">Blogs</span>
                    </a>
                    
                    
                </li>
                <li class="nav-item ">
                    <a href="login.html" class="navbar-nav-link dropdown-toggle caret-0" >
                        
                        <span class=" ml-2">Student</span>
                    </a>
                    
                    
                </li>
                <li class="nav-item ">
                    <a href="login.html" class="navbar-nav-link dropdown-toggle caret-0" >
                        
                        <span class=" ml-2">Tutor</span>
                    </a>
                    
                    
                </li>

                <li class="nav-item dropdown dropdown-user">
                    <a href="#" class="navbar-nav-link d-flex align-items-center dropdown-toggle" data-toggle="dropdown">
                        <img src="global_assets/images/placeholders/placeholder.jpg" class="rounded-circle mr-2" height="34" alt="">
                        <span>Logged in User</span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right">
                        <a href="dashboard.html" class="dropdown-item"><i class="icon-user-plus"></i> My profile</a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item"><i class="icon-switch2"></i> Logout</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <!-- /main navbar -->



    <!-- /alternative navbar -->

</div>
<!-- /multiple fixed navbars wrapper -->