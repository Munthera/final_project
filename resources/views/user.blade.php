
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
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
    <link rel="stylesheet" href="css/style.css">
    @yield('style')
    <style>
      body {
      font-family: Arial, sans-serif;
      background-color: #f2f2f2;
      margin: 0;
      padding: 0;
  }
  
  .profile-container {
      max-width: 400px;
      margin: 0 auto;
      padding: 20px;
      background-color: #fff;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      border-radius: 5px;
      text-align: center;
      margin-top: 10%;
  }
  
  .profile-image {
      width: 150px;
      height: 150px;
      border-radius: 50%;
      object-fit: cover;
      margin-bottom: 20px;
  }
  
  .profile-name {
      font-size: 24px;
      font-weight: bold;
  }
  
  .profile-email {
      font-size: 16px;
      color: #777;
      margin-bottom: 10px;
  }
  
  .profile-phone {
      font-size: 16px;
      color: #777;
      margin-bottom: 20px;
  }
  
  .edit-button {
      background-color: #007bff;
      color: #fff;
      border: none;
      padding: 10px 20px;
      font-size: 16px;
      border-radius: 5px;
      cursor: pointer;
  }
  
  .edit-button:hover {
      background-color: #0056b3;
  }
  
    </style>
  </head>
  <body>
	  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-dark" id="ftco-navbar">
      <div class="container">
        <a class="navbar-brand" href="index.html">Adventures<span>The perfect place to travel</span></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
          aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="oi oi-menu"></span> Menu
        </button>
  
        <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active"><a href="/" class="nav-link">HOME</a></li>
            <li class="nav-item"><a href="categories" class="nav-link">CATEGORIES</a></li>
            <!-- <li class="nav-item"><a href="blog.html" class="nav-link">Blog</a></li> -->
            <li class="nav-item"><a href="about" class="nav-link">ABOUT US</a></li>
            <li class="nav-item"><a href="contact" class="nav-link">CONTACT US</a></li>
            @if(session('name'))
            <li class="nav-item"><a href="{{route('logout')}}" class="nav-link">LOGOUT</a></li>
            <li class="nav-item cta"><a href="book" class="nav-link">BOOK NOW</a></li>
            <li class="nav-item cta"><a href="user" class="nav-link user">{{ ucfirst(session('name')[0]) }}</a></li>
            @else
            <li class="nav-item"><a href="login" class="nav-link">LOGIN</a></li>
            <li class="nav-item"><a href="signup" class="nav-link">REGISTER</a></li>

            @endif
          </ul>
        </div>
      </div>
    </nav>



@section('title' , 'user')






  


    @if (session('name'))
    @foreach ($user as $user)
    
      <div class="profile-container">
          <h2>Profile </h2>
          <img src="myimg/{{$user->photo}}" alt="User Photo" class="profile-image">
          <div class="profile-name">{{$user->Fname}}  {{$user->Lname}}</div>
            <div class="profile-email">{{$user->email}}</div>
            <div class="profile-phone">{{$user->phone}}</div>
            <form  action="{{ url('/user/' . $user->id . '/edit/') }}" method="POST">
              @csrf
              @method('put')
              <input type="hidden" name="user_id" value="{{ $user->id }}">
              <input type="submit" value="Edit" class="edit-button">
            </form>
        </div>

  @endforeach
  <br>
  <div>
    @foreach ($reservations as $reservation)
      
    <table class="table table-striped table-dark">
        <thead>
            <tr>

              <th scope="col">Tour Number </th>
              <th scope="col">Tour name </th>
              <th scope="col">Data of the tour </th>
              <th scope="col">Tour price </th>
              <th scope="col">Days of tour </th>
              <th scope="col">Number of the clients </th>
              <th scope="col">Tour photo </th>
      
            </tr>
          </thead>
          <tbody>


        
            <tr>
                <td>{{$reservation->id}}</td>
                <td>{{$reservation->trip->trip_name}}</td>
                <td>{{$reservation->trips_days}}</td>
                <td>{{$reservation->trip->price}}</td>
                <td>{{$reservation->trip->days}}</td>
                <td>{{$reservation->trip->clients}}</td>
                <td><img src="{{$reservation->trip->photo}}" alt="photo" height="120px"></td>
            </tr>
          </tbody>
    </table>    
    

  </div>

@endforeach
    @endif
   
    <footer class="ftco-footer bg-bottom" style="background-image: url(images/footer-bg.jpg);">
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
                        class="text">diitoclean@gmail.com</span></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">
  
  
  
            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              Copyright &copy;
              <script>document.write(new Date().getFullYear());</script> Ditto Clean
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>


    
