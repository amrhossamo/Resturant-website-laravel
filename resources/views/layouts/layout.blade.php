<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/global.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/home.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/menu.css') }}">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    
   
    <title> @yield('title')</title>
</head>
<body>



<div class="container-fluid p-0 topbar">
        <div class="row gx-0 d-none d-lg-flex">
            <div class="col-lg-7 px-5 text-start">
                <div class="h-100 ml-5 d-inline-flex align-items-center py-3 me-4">
                <small class="fa fa-phone-alt text-light me-2"></small>
                    <small class="text-light">(414) 857 - 0107</small>
                </div>
                <div class="ml-3 h-100 d-inline-flex align-items-center py-3">
                    <small class="far fa-clock text-light me-2"></small>
                    <small class="text-light">yummy@bistrobliss</small>
                </div>
            </div>
            <div class="col-lg-5 text-start d-flex justify-content-center">
              
              <div class="h-100 d-inline-flex align-items-center">
                  <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 28 28" fill="none">
                      <circle cx="13.5855" cy="13.5855" r="13.5855" fill="#F9F9F7" fill-opacity="0.12"/>
                      <path d="M19.6009 10.6613C19.1943 10.842 18.7651 10.955 18.3133 11.0228C18.7651 10.7517 19.1265 10.3225 19.2847 9.8029C18.8555 10.0514 18.3811 10.2321 17.8615 10.3451C17.4549 9.91585 16.8676 9.64478 16.235 9.64478C15.0152 9.64478 14.0212 10.6387 14.0212 11.8586C14.0212 12.0393 14.0438 12.1974 14.089 12.3556C12.2592 12.2652 10.6102 11.3842 9.50328 10.0288C9.32256 10.3676 9.20961 10.7291 9.20961 11.1357C9.20961 11.9038 9.59364 12.5815 10.2036 12.9881C9.84212 12.9655 9.50328 12.8751 9.18702 12.717V12.7396C9.18702 13.8239 9.95507 14.7275 10.9716 14.9308C10.7909 14.976 10.5876 14.9986 10.3843 14.9986C10.2487 14.9986 10.0906 14.976 9.95507 14.9534C10.2487 15.8344 11.062 16.4895 12.0333 16.4895C11.2653 17.0768 10.3165 17.4383 9.27738 17.4383C9.09666 17.4383 8.91594 17.4383 8.75781 17.4157C9.75177 18.0482 10.9038 18.4096 12.1689 18.4096C16.2576 18.4096 18.494 15.0212 18.494 12.0845C18.494 11.9941 18.494 11.8812 18.494 11.7908C18.9232 11.4971 19.3073 11.1131 19.6009 10.6613Z" fill="white"/>
                  </svg></a>
                   <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 28 28" fill="none">
                      <circle cx="13.7564" cy="13.5855" r="13.5855" fill="#F9F9F7" fill-opacity="0.12"/>
                      <path d="M12.5011 19.7065V14.3174H10.6875V12.2172H12.5011V10.6683C12.5011 8.87084 13.5989 7.89209 15.2023 7.89209C15.9704 7.89209 16.6305 7.94927 16.8229 7.97483V9.85328L15.7108 9.85379C14.8388 9.85379 14.6699 10.2682 14.6699 10.8763V12.2172H16.7497L16.4789 14.3174H14.6699V19.7065H12.5011Z" fill="white"/>
                  </svg></a>
                  <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 28 28" fill="none">
                        <circle cx="13.9278" cy="13.5855" r="13.5855" fill="#F9F9F7" fill-opacity="0.12"/>
                        <path d="M13.9296 8.20062C15.6848 8.20062 15.8926 8.20719 16.586 8.23881C17.0029 8.24391 17.4158 8.32046 17.8068 8.46513C18.0904 8.57449 18.3479 8.742 18.5628 8.9569C18.7777 9.1718 18.9452 9.42932 19.0545 9.71287C19.1992 10.1039 19.2758 10.5168 19.2809 10.9337C19.3122 11.6271 19.319 11.8349 19.319 13.5901C19.319 15.3452 19.3125 15.5531 19.2809 16.2464C19.2758 16.6633 19.1992 17.0763 19.0545 17.4673C18.9452 17.7508 18.7777 18.0083 18.5628 18.2232C18.3479 18.4381 18.0904 18.6056 17.8068 18.715C17.4158 18.8597 17.0029 18.9362 16.586 18.9413C15.8929 18.9726 15.6851 18.9795 13.9296 18.9795C12.1741 18.9795 11.9663 18.9729 11.2732 18.9413C10.8563 18.9362 10.4434 18.8597 10.0524 18.715C9.76885 18.6056 9.51133 18.4381 9.29643 18.2232C9.08154 18.0083 8.91402 17.7508 8.80466 17.4673C8.65999 17.0763 8.58344 16.6633 8.57834 16.2464C8.54704 15.5531 8.54015 15.3452 8.54015 13.5901C8.54015 11.8349 8.54673 11.6271 8.57834 10.9337C8.58344 10.5168 8.65999 10.1039 8.80466 9.71287C8.91402 9.42932 9.08154 9.1718 9.29643 8.9569C9.51133 8.742 9.76885 8.57449 10.0524 8.46513C10.4434 8.32046 10.8563 8.24391 11.2732 8.23881C11.9666 8.20751 12.1744 8.20062 13.9296 8.20062ZM13.9296 7.01611C12.1453 7.01611 11.9206 7.02363 11.2194 7.05556C10.6738 7.06641 10.134 7.16971 9.62292 7.36107C9.18452 7.52625 8.78744 7.78509 8.45939 8.11955C8.12463 8.44772 7.86557 8.84503 7.70029 9.28371C7.50893 9.79476 7.40562 10.3346 7.39477 10.8802C7.36347 11.5807 7.35596 11.8055 7.35596 13.5898C7.35596 15.374 7.36347 15.5988 7.3954 16.3C7.40625 16.8456 7.50956 17.3854 7.70092 17.8964C7.86601 18.3351 8.12486 18.7324 8.45939 19.0606C8.78762 19.3951 9.18493 19.654 9.62355 19.8191C10.1346 20.0104 10.6744 20.1137 11.22 20.1246C11.9212 20.1559 12.145 20.164 13.9302 20.164C15.7154 20.164 15.9393 20.1565 16.6404 20.1246C17.186 20.1137 17.7258 20.0104 18.2369 19.8191C18.6734 19.6498 19.0699 19.3914 19.4008 19.0602C19.7318 18.7291 19.99 18.3325 20.1589 17.8958C20.3503 17.3848 20.4536 16.8449 20.4644 16.2993C20.4957 15.5988 20.5032 15.374 20.5032 13.5898C20.5032 11.8055 20.4957 11.5807 20.4638 10.8795C20.4529 10.3339 20.3496 9.79413 20.1583 9.28308C19.9932 8.84446 19.7343 8.44715 19.3998 8.11892C19.0716 7.78439 18.6743 7.52554 18.2356 7.36045C17.7246 7.16909 17.1848 7.06578 16.6392 7.05493C15.9386 7.02363 15.7139 7.01611 13.9296 7.01611Z" fill="white"/>
                        <path d="M13.928 10.2178C13.2603 10.2178 12.6077 10.4158 12.0525 10.7867C11.4974 11.1576 11.0647 11.6848 10.8092 12.3017C10.5537 12.9185 10.4869 13.5972 10.6171 14.2521C10.7474 14.9069 11.0689 15.5084 11.541 15.9805C12.0131 16.4526 12.6146 16.7741 13.2694 16.9044C13.9242 17.0346 14.603 16.9678 15.2198 16.7123C15.8366 16.4568 16.3638 16.0241 16.7348 15.4689C17.1057 14.9138 17.3037 14.2611 17.3037 13.5935C17.3037 12.6982 16.948 11.8396 16.315 11.2065C15.6819 10.5734 14.8233 10.2178 13.928 10.2178ZM13.928 15.7847C13.4946 15.7847 13.0709 15.6562 12.7106 15.4154C12.3503 15.1746 12.0694 14.8324 11.9036 14.432C11.7377 14.0316 11.6943 13.5911 11.7789 13.166C11.8634 12.741 12.0721 12.3505 12.3785 12.0441C12.685 11.7376 13.0754 11.5289 13.5005 11.4444C13.9255 11.3598 14.3661 11.4032 14.7665 11.5691C15.1669 11.7349 15.5091 12.0158 15.7499 12.3761C15.9907 12.7365 16.1192 13.1601 16.1192 13.5935C16.1192 14.1746 15.8883 14.732 15.4774 15.1429C15.0665 15.5538 14.5091 15.7847 13.928 15.7847Z" fill="white"/>
                        <path d="M17.4485 10.8711C17.8842 10.8711 18.2373 10.518 18.2373 10.0823C18.2373 9.64663 17.8842 9.29346 17.4485 9.29346C17.0128 9.29346 16.6597 9.64663 16.6597 10.0823C16.6597 10.518 17.0128 10.8711 17.4485 10.8711Z" fill="white"/>
                  </svg></a>
                  <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 28 28" fill="none">
                      <circle cx="14.0987" cy="13.5855" r="13.5855" fill="#F9F9F7" fill-opacity="0.12"/>
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M14.706 7.01611C11.2214 7.01611 8.41797 9.81954 8.41797 13.3042C8.41797 16.0814 10.2258 18.4394 12.7148 19.2778C13.0292 19.3302 13.134 19.1468 13.134 18.9634C13.134 18.8062 13.134 18.4132 13.134 17.8892C11.3786 18.2822 11.0118 17.0508 11.0118 17.0508C10.7236 16.3172 10.3044 16.1338 10.3044 16.1338C9.72798 15.7408 10.3568 15.7408 10.3568 15.7408C10.9856 15.7932 11.3262 16.3958 11.3262 16.3958C11.8764 17.3652 12.7934 17.077 13.1602 16.9198C13.2126 16.5006 13.3698 16.2386 13.5532 16.0814C12.1646 15.9242 10.6974 15.374 10.6974 12.9636C10.6974 12.2824 10.9332 11.706 11.3524 11.2868C11.3 11.1295 11.0642 10.5007 11.4048 9.60994C11.4048 9.60994 11.9288 9.45273 13.134 10.2649C13.6318 10.1339 14.182 10.0553 14.706 10.0553C15.23 10.0553 15.7802 10.1339 16.278 10.2649C17.4833 9.45273 18.0073 9.60994 18.0073 9.60994C18.3479 10.4745 18.1383 11.1033 18.0597 11.2868C18.4527 11.7322 18.7147 12.2824 18.7147 12.9636C18.7147 15.374 17.2474 15.898 15.8326 16.0552C16.0684 16.2386 16.2518 16.6316 16.2518 17.208C16.2518 18.0464 16.2518 18.7276 16.2518 18.9372C16.2518 19.0944 16.3566 19.304 16.6972 19.2516C19.1863 18.4394 20.9941 16.0814 20.9941 13.3042C20.9941 9.81954 18.1907 7.01611 14.706 7.01611Z" fill="white"/>
                  </svg></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->

    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0">
        <a href="index.html" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <a style="text-decoration: none ; display:flex;" href="/">
                 <img src="../images/icons/japan.png" alt="">
                 <h1 class="logg mt-4">Bistro Bliss</h1>     
            </a>
            
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse boss " id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0 ">
                <a href="/" class="nav-item nav-link active">Home</a>
                <a href="/about" class="nav-item nav-link">About</a>
                <a href="/menu" class="nav-item nav-link">Menu</a>
                <a href="#" class="nav-item nav-link">Pages</a>
          
                <a href="/contact" class="nav-item nav-link">Contact</a>
                @if (Route::has('login'))
                @auth
                   <li class="nav-item dropdown mt-4">
                    {{ auth()->user()->unreadNotifications->count() }} 
                        <a class=" " href="#"  role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                 <i class="fa-regular fa-bell"></i>
                              </a>
                                <br>
                    </a>
                    <ul class="dropdown-menu">
                       @foreach  (auth()->user()->unreadNotifications as $notification) 
                      <li><a class="dropdown-item" href="#">{{ $notification->data['status'] }}</a></li>
                      <li><a class="dropdown-item" href="#">{{ $notification->created_at->diffForHumans() }}</a></li>
                      <li><hr class="dropdown-divider"></li>
                      @endforeach
                    </ul>
                  </li>
                  @endauth
                  @else
                  @endif
         
       

      
            </div>  
            
            <!-- login validtaion -->
        <div class="profile relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 selection:bg-red-500 selection:text-white">
            @if (Route::has('login'))
                <div class="d-flex  sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                       
                    @auth
                       <form action="{{route('Bookings.create')}}">
                              <button class="btn btn-outline-secondary ">Book A Table</button>
                      </form>
                      <a href="/profile" class="ml-5 mt-2 font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Profile</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif
                    @endauth 
                </div>
                </div>
                @endif
         </div>


      
    </nav>
    <!-- Navbar End -->







    @yield('cont')







<footer>
  <div class="">
    <div class="row d-flex justify-content-center align-items-baseline w-100">
    <div class="col-lg-3 col-md-6 ml-5">
    <img src="../images/footer/footer-logo.png" alt="">
    <h1 class="log mt-4">Bistro Bliss</h1>
        <div class="media">
          <a href="#" class="pull-left">
          </a>
          <div class="media-body">
           
            <p>In the new era of technology we look a in the future with certainty and pride to for our company and.</p>
          </div>
        </div>
        
        <ul class="list-unstyled socila-list">
          <li><a href="#"><img src="../images/footer/twitter.png" alt="twitter" /></a></li>
          <li><a href="#"><img src="../images/footer/facebook.png" alt="facebook" /></a></li>
          <li><a href="#"><img src="../images/footer/instagram.png" alt="instagram" /></a></li>
          <li><a href="#"><img src="../images/footer/github.png" alt="github" /></a></li>
        
        </ul>
        
      </div>
     
            <div class="col-lg-1 col-md-6">
        
        <ul class="footer-list list-unstyled two-column ">
        <h3 class="footer-title">Pages</h3>
          <li>Home</li>
          <li>About</li>
          <li>Menu</li>
          <li>Pricing</li>
          <li>Blog</li>
          <li>Contact</li>
          <li>Delivery</li>
        </ul>
      </div>
      <div class="col-lg-1 col-md-6">
        
        <ul class="footer-list list-unstyled two-column">
        <h3 class="footer-title">Utility Pages</h3>
          <li>Start Here</li>
          <li>Styleguide</li>
          <li>Password Protected</li>
          <li>404 Not Found</li>
          <li>Licenses</li>
          <li>Changelog</li>
          <li>View More</li>
         
        </ul>
      </div>
     
  


      
      

      <div class="col-lg-3 d-flex row justify-content-center align-content-start">
        <h3 class="footer-title w-100 text-center">Follow Us On Instagram</h3>
        <img class="img-thumbnail" src="../images/footer/pexels-steve.png" alt="" />
        <img class="img-thumbnail" src="../images/footer/eiliv-aceron.png" alt="" />
        <img class="img-thumbnail" src="../images/footer/pexels-ella-olsson.png" alt="" />
        <img class="img-thumbnail" src="../images/footer/cupcake.png" alt="" />
      </div>
      
    </div>
    <hr>
  </div>
  <div class="copyright text-center">
  Copyright © 2023 Hashtag Developer. All Rights Reserved
  </div>
</footer>



    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>