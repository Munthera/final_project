<!DOCTYPE html>
<html lang="en">
  <head>
    <title> LOG IN </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

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
    <link rel="stylesheet" href="./css/login.style.css"> 
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

</head>
<body>


<!-- Navbar -->


<div class="site-wrap d-md-flex align-items-stretch" style="margin-top: 5rem;">
    <div class="bg-img" style="background-image: url('myimg/Vella.webp')"></div>
    <div class="form-wrap">
        <div class="form-inner">
            <h1 class="title" style="color: #fd7e14;">Login</h1>
            <p class="caption mb-4">Please enter your login details to sign in.</p>

            <form action="{{route('login')}}" method="post" class="pt-3">
                @csrf
                <div class="form-floating">
                    <label for="email">Email Address</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter your email" name="email">
                    @if ($errors->has('email'))
                    <p class="alert alert-danger ">{{ $errors->first('email') }}</p>
                    @endif
                    
                </div>

                <div class="form-floating">
                    <span class="password-show-toggle js-password-show-toggle" style="margin-top: 2rem;"><span class="uil"></span></span>
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" placeholder="Enter your Password" name="password">
                    @if ($errors->has('password'))
                    <p class="alert alert-danger ">{{ $errors->first('password') }}</p>
                    @endif
                    
                </div>

                <!-- <div class="d-flex justify-content-between">
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="remember">
                        <label for="remember" class="form-check-label">Keep me logged in</label>
                    </div>
                    <div><a href="#">Forgot password?</a></div>
                </div> -->
                
                <div class="d-grid mb-5" >
                    <button type="submit" class="btn btn-primary">Log in</button>
                </div>

                <div class="mb-2">Don’t have an account? <a href="{{route('signup')}}"><span style="color: #fd7e14;">sign up</span></a></div>

             

            </form>
        </div>
    </div>
</div>


    <!-- FOOTER -->
</body>
<script src="js/login.js"></script>
</html>