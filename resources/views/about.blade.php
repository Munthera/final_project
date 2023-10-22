@extends('layout.master')

@section('title' , 'About us')


@section('page')
    

<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('myimg/Clean7.jpg');"
data-stellar-background-ratio="0.5">
<div class="overlay"></div>
<div class="container">
  <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
    <div class="col-md-9 ftco-animate pb-5 text-center">
      <h1 class="mb-3 bread">About Us</h1>
      <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i
              class="ion-ios-arrow-forward"></i></a></span> <span>About us <i
            class="ion-ios-arrow-forward"></i></span></p>
    </div>
  </div>
</div>
</section>


<br>
<section class="ftco-counter img" id="section-counter">
<div class="container">
  <div class="row d-flex">
    <div class="col-md-6 d-flex">
      <div class="img d-flex align-self-stretch" style="background-image:url(myimg/team.jpg);"></div>
    </div>
    <div class="col-md-6 pl-md-5 py-5">
      <div class="row justify-content-start pb-3">
        <div class="col-md-12 heading-section ftco-animate">
          <h2 class="mb-4">From Learning to Achieving</h2>
          <p>We are a team of dedicated professionals with a shared commitment to providing top-notch cleaning services. With years of experience in the industry, we have honed our skills to perfection, ensuring that every nook and cranny is left spotless. Our team members are not just experts but also trustworthy individuals who treat your home and car with the utmost care and respect.</p>
        </div>
      </div>
    </div>
  </div>
</div>
</section>
<br>
<section class="ftco-section testimony-section bg-bottom" style="background-image: url(images/bg_3.jpg);">
<div class="container">
  <div class="row justify-content-center pb-4">
    <div class="col-md-7 text-center heading-section ftco-animate">
      <h2 class="mb-4">Our Team</h2>
    </div>
  </div>
  <div class="row ftco-animate">
    <div class="col-md-12">
      <div class="carousel-testimony owl-carousel ftco-owl">
        <div class="item">
          <div class="testimony-wrap py-4">
            <div class="text">
              <p class="mb-4">Web developer training with Orange coding Academy.</p>
              <div class="d-flex align-items-center">
                <div class="user-img" style="background-image: url(myimg/munther.png)"></div>
                <div class="pl-3">
                  <p class="name">Munther Ahmad</p>
                  <span class="position">The Boos</span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="testimony-wrap py-4">
            <div class="text">
              <p class="mb-4">Web developer training with Orange coding Academy.</p>
              <div class="d-flex align-items-center">
                <div class="user-img" style="background-image: url(myimg/ma.jpg)"></div>
                <div class="pl-3">
                  <p class="name">Mahmoud Jabali </p>
                  <span class="position">Enginner</span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="testimony-wrap py-4">
            <div class="text">
              <p class="mb-4">Web developer training with Orange coding Academy.</p>
              <div class="d-flex align-items-center">
                <div class="user-img" style="background-image: url(myimg/omar.jpg)"></div>
                <div class="pl-3">
                  <p class="name">Omar Salah</p>
                  <span class="position">Worker</span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="testimony-wrap py-4">
            <div class="text">
              <p class="mb-4">Web developer training with Orange coding Academy.</p>
              <div class="d-flex align-items-center">
                <div class="user-img" style="background-image: url(myimg/ahmad.jpg)"></div>
                <div class="pl-3">
                  <p class="name">Ahmad Yaser</p>
                  <span class="position">Worker</span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="testimony-wrap py-4">
            <div class="text">
              <p class="mb-4">Web developer training with Orange coding Academy.</p>
              <div class="d-flex align-items-center">
                <div class="user-img" style="background-image: url(myimg/hamad.jpg)"></div>
                <div class="pl-3">
                  <p class="name">Hamad Kraem</p>
                  <span class="position">Worker</span>
                </div>
              </div>
            </div>
          </div>
        </div>
        
      </div>
    </div>
  </div>
</div>
</section>

@endsection