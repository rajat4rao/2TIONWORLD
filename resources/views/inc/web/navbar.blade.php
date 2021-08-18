<style>

.navbar-dark .navbar-nav .nav-link {
    color: #eaeaea;
}
@media screen and (min-width: 576px) 
{
.login-form {
    width: 30rem;
}
}

@media only screen and (max-device-width: 575px) {
.login-form {
    width: 100%;
}  
}  

.form-control:focus {
    border-color: #1264AF;
    box-shadow: 0 0 0 0.2rem rgb(0 123 255 / 0%);
}
 


</style>

<link href="{{ url('/public/css/assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<nav class="navbar navbar-expand-md navbar-dark shadow-sm" style="background-color: #1D2545" >
  <div class="container">
    <a class="navbar-brand" href="/">
    
        <h3 style="color: #e4e4e4;margin-bottom: 0px;">2tionworld</h3>    
        
      <!-- <img src="../dev/public/image/images/findworka-logo1.png" width="120" height="30"  alt="Findworka academy logo"> -->
    </a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
      <span class="navbar-toggler-icon"></span>
    </button>



    <div class="collapse navbar-collapse" id="navbarSupportedContent" style="background-color: #1D2545; padding-left:15px">
      <!-- Left Side Of Navbar -->
      <ul class="navbar-nav mr-auto">

      </ul>

      <ul class="navbar-nav mr-auto">
       <!-- <li class="nav-item active">
          <a class="nav-link" href="/">Blogs <span class="sr-only">(current)</span></a>
        </li>
        
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Programmes
          </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="/back-end">Back-end Development</a>
              <a class="dropdown-item" href="/cms">CMS Web Design</a>
              <a class="dropdown-item" href="/data-science">Data Science</a>
              <a class="dropdown-item" href="/front-end">Front-end Development</a>
              <a class="dropdown-item" href="/mobile">Mobile App Development</a>
              <a class="dropdown-item" href="/ui-ux">UX & Product Design</a>
            </div>  -->
        <!--  <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Sessions</a> -->
        <!--    
        </li> -->
        <!--
        <li class="nav-item">
          <a class="nav-link" href="/blog">Blogs</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/about">Student</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/contact">Tutor</a>
        </li> 
        -->
      </ul> 
      
      <!-- Right Side Of Navbar -->
        <ul class="navbar-nav ml-auto">
          <!-- Authentication Links -->
                <li class="nav-item">
                  <a class="nav-link" href="/home">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/student">Student</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/tutor">Tutor</a>
                </li> 
          @guest
              <li class="nav-item">
                  <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
              </li>
              @if (Route::has('register'))
                  <li class="nav-item">
                      <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                  </li>
              @endif
          @else
              <li class="nav-item dropdown">
                  <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                      {{ Auth::user()->firstname }} 
                  </a>

                  <div class="dropdown-menu dropdown-menu-right" >
                      <a class="dropdown-item" href="/dashboard">
                          View Profile
                      </a>
                      <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();">
                          {{ __('Logout') }}
                      </a>

                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                          @csrf
                      </form>
                  </div>
              </li>
          @endguest
          
            <li class="nav-item">
                  <a class="nav-link" href="/blog">Blogs</a>
                </li>
          
        </ul>
    </div>
  </div>
</nav>
