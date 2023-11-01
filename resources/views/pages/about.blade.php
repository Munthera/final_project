@extends('pages.layout.master')


@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <h1 class="display-1 text-white animated slideInDown">About Us</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb text-uppercase mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>

                    <li class="breadcrumb-item text-primary active" aria-current="page"><b>About Us</b></li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="about-img">
                        <img class="img-fluid" src="img/Man.JPG" alt="">
                        <img class="img-fluid" src="img/team.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <h4 class="section-title">About Us</h4>
                    <h1 class="display-5 mb-4"> Whatever you want to achieve, establishing your presence on the web is a must</h1>
                    <p>The main goal of this site <b> is to provide service at the lowest and most reliable prices.</b>
                       </p>
                    <p class="mb-4">

                    We are a team of dedicated professionals with a shared commitment to providing top-notch cleaning services. With years of experience in the industry, we have honed our skills to perfection, ensuring that every nook and cranny is left spotless. Our team members are not just experts but also trustworthy individuals who treat your home and car with the utmost care and respect.

                        </p>
                    <div class="d-flex align-items-center">
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center border border-5 border-primary" style="width: 120px; height: 120px;">
                            <h1 class="display-1 mb-n2" data-toggle="counter-up">2</h1>
                        </div>
                        <div class="ps-4">
                            <h3>Years</h3>
                            <h3>Working</h3>
                            <h3 class="mb-0">Experience</h3>
                        </div>
                    </div>
                    {{-- <a class="btn btn-primary py-3 px-5" href="">Read More</a> --}}
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->
@endsection
