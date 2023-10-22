<!DOCTYPE html>
<html lang="en">
  <head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    {{-- <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css"> --}}
    @yield('style')
    <style>
        .user{
          margin-left: 1rem;
        }
        .nav{
          font-weight: 700;
          font-size: 24px;
          background: #33313b;
          padding: 1em;
          line-height: 1.2;
          text-align: center;
          display: inline !important;
        }
        .button{
          background-color: orange;
          padding: 0.5rem;
          color: white !important;
        }
        footer{
          color: white !important;
        }
        footer a{
          text-decoration: none;
          color: white !important;
        }
    </style>
  </head>
  <body>
	  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
      <div class="container">
          <a class="navbar-brand nav" href="#">
            <div>DittoClean</div>
            <div class="word">The perfect place to clening</div>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
          aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="oi oi-menu"></span> Menu
          </button>
  
        <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active"><a href="/" class="nav-link">HOME</a></li>
            <li class="nav-item"><a href="{{route('category')}}" class="nav-link">CATEGORIES</a></li>
            <!-- <li class="nav-item"><a href="blog.html" class="nav-link">Blog</a></li> -->
            <li class="nav-item"><a href="{{route('about')}}" class="nav-link">ABOUT US</a></li>
            <li class="nav-item"><a href="{{route('contact')}}" class="nav-link">CONTACT US</a></li>
            @if(session('name'))
            <li class="nav-item"><a href="{{route('logout')}}" class="nav-link">LOGOUT</a></li>
            <li class="nav-item cta"><a href="{{route('book')}}" class="nav-link button">BOOK NOW</a></li>
            <li class="nav-item cta"><a href="{{route('user_profile')}}" class="nav-link user button">{{ ucfirst(session('name')[0]) }}</a></li>
            @else
            <li class="nav-item"><a href="login" class="nav-link">LOGIN</a></li>
            <li class="nav-item"><a href="signup" class="nav-link">REGISTER</a></li>

            @endif
          </ul>
        </div>
      </div>
    </nav>
<section class="ftco-counter img" id="section-counter" style="margin-bottom: 2rem">

    @foreach($trip as $trip)
    <div class="container" >
       
        <div class="row d-flex">
            <div class="col-md-6 d-flex">
                <div class="img d-flex align-self-stretch" style="background-image: url(/{{$trip->photo}}); width:25rem; height:25rem;margin-top:2rem;background-size:100% 100%;"></div>
            </div>
            <div class="col-md-6 pl-md-5 py-5">
                <div class="row justify-content-start pb-3">
                    <div class="col-md-12 heading-section ftco-animate">
                        <h2 class="mb-4">{{ $trip->trip_name }}</h2>
                        <p>{{ $trip->details }}</p>

                        
                    </div>

                    <form  action="{{route('confirmation')}}" method="post">
                        @csrf
                        <label for="">Choose The Trip Day</label>
                        <br>
                        <input type="hidden" name="trip_id" value="{{ $trip->id }}">
                        <input type="hidden" name="user_id" value="{{session('id')}}">
                         
                         <br>
                         <input type="datetime-local" name="Start_Time" id="Category_Name" class="form-control"><br>
                        <input type="submit" value="Reservation confirmation" class="btn btn-primary">
                    </form>
                    
                    
                </div>
            </div>
        </div>
       
    </div>

    @endforeach
</section>





  
<footer class="ftco-footer bg-bottom" style="background-image: url(/images/footer-bg.jpg);">
  <div class="container">
    <div class="row mb-5">
      <div class="col-md">
        <div class="ftco-footer-widget mb-4">
          <h2 class="ftco-heading-2">Ditto Clean</h2>
          <p>Book with us and contact us. Do not hesitate, as we provide the finest and finest cleaning services.</p>
          <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
            <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
            <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
            <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
          </ul>
        </div>
      </div>

      <div class="col-md">
        <div class="ftco-footer-widget mb-4">
          <h2 class="ftco-heading-2">Have a Questions?</h2>
          <div class="block-23 mb-3">
            <ul>
              <li><span class="icon icon-map-marker"></span><span class="text">123Street,Aqaba,Jordan</span></li>
              <li><a href="#"><span class="icon icon-phone"></span><span class="text">+962799955888
                  </span></a></li>
              <li><a href="#"><span class="icon icon-envelope"></span><span
                    class="text">dittoclean@gmail.com</span></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12 text-center">



        <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
          Copyright &copy;
          <script>document.write(new Date().getFullYear());</script> Adventures
          <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
        </p>
      </div>
    </div>
  </div>
</footer>
  </body>
</html>





