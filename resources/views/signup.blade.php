<!DOCTYPE html>
<html lang="en">
  <head>
    <title> REGISTER </title>
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


<div class="site-wrap d-md-flex align-items-stretch" style="margin-top: 5rem;" >
    <div class="bg-img" style="background-image: url('myimg/Clean10.jpg')"></div>
    <div class="form-wrap">
        <div class="form-inner">
            <h1 class="title" style="color: #fd7e14;">Sign up</h1>
            <p class="caption mb-4">Create your account in seconds.</p>

            <form action="{{route('store')}}" method="post" class="pt-3">
                @csrf
                <div class="form-floating">
                    <label for="name">First Name</label>
                    <input type="text" class="form-control" id="name" placeholder="Enter your Full Name" name="fname">
                    @if ($errors->has('name'))
                    <p class="alert alert-danger ">{{ $errors->first('name') }}</p>
                    @endif
                </div>
                <div class="form-floating">
                    <label for="name">Last Name</label>
                    <input type="text" class="form-control" id="name" placeholder="Enter your Full Name" name="lname">
                    @if ($errors->has('lanem'))
                    <p class="alert alert-danger ">{{ $errors->first('lname') }}</p>
                    @endif
                </div>

                <div class="form-floating">
                    <label for="email">Email Address</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter your Email" name="email">
                    @if ($errors->has('email'))
                    <p class="alert alert-danger ">{{ $errors->first('email') }}</p>
                    @endif
                    
                </div>
                <div class="form-floating">
                    <label for="email">Phone Number</label>
                    <input type="text" class="form-control" id="email" placeholder="Enter your phone" name="phone">
                    @if ($errors->has('phone'))
                    <p class="alert alert-danger ">{{ $errors->first('phone') }}</p>
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

                <div class="form-floating">
                    <span class="password-show-toggle js-password-show-toggle" style="margin-top: 2rem;"><span class="uil"></span></span>
                    <label for="password">confirm Password</label>
                    <input type="password" class="form-control" id="password" placeholder="confirm your Password" name="confirm_password">
                    @if ($errors->has('confirm_password'))
                    <p class="alert alert-danger ">{{ $errors->first('confirm_password') }}</p>
                    @endif
                </div>

                <!-- <div class="d-flex justify-content-between">
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="remember">
                        <label for="remember" class="form-check-label">I agree to the <a href="#">Terms of Service</a> and <a href="#">Privacy Policy</a></label>
                    </div>
                </div> -->

                <div class="d-grid mb-4">
                    <button type="submit" class="btn btn-primary">Create an account</button>
                </div>

                <div class="mb-2">Already a member? <a href="{{route('login')}}"><span style="color: #fd7e14;"> Log in </span> </a></div>

              

            </form>
        </div>
    </div>
</div>





    <!-- FOOTER -->
</body>
<script src="js/login.js"></script>

</html>