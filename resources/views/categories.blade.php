@extends('layout.master')

@section('title' , 'Categories')


@section('page')
    

   

<div class="hero-wrap js-fullheight"
style="background-image: url('myimg/Clean6.jpg');"
data-stellar-background-ratio="0.5">
<div class="overlay"></div>
<div class="container">
    <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center"
        data-scrollax-parent="true">
        <div class="col-md-9 text text-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
            <!-- <a href="https://vimeo.com/45830194" class="icon-video popup-vimeo d-flex align-items-center justify-content-center mb-4">
          <span class="ion-ios-play"></span>
    </a> -->
            
            <h1 data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">CATEGORIES</h1>
        </div>
    </div>
</div>
</div>


<br> <br>





<section class="ftco-section">
<div class="container">
    <div class="row justify-content-center pb-4">
  <div class="col-md-12 heading-section text-center ftco-animate">
    <h2 class="mb-4">Categories	</h2>
  </div>
</div>
<div class="row">
    <div class="col-md-3 ftco-animate">
        <div class="project-destination">
        <a href="archaeological" class="img" style="background-image: url(myimg/Cars.png);">
                <div class="text">
                <h3>Cleaning Cars</h3>
        		<span>View all services</span>
                </div>
            </a>
        </div>
    </div>
    <div class="col-md-3 ftco-animate">
        <div class="project-destination">
        <a href="medical" class="img" style="background-image: url(myimg/homes.webp);">
                <div class="text">
                <h3>Cleaning Homes</h3>
        		<span>View all services</span>
                </div>
            </a>
        </div>
    </div>
    <div class="col-md-3 ftco-animate">
        <div class="project-destination">
        <a href="enjoyment" class="img" style="background-image: url(myimg/Motorcycle.jpg);">
                <div class="text">
                <h3>Motorcycle cleaning</h3>
        		<span>View all services</span>
                </div>
            </a>
        </div>
    </div>
    <div class="col-md-3 ftco-animate">
        <div class="project-destination">
        <a href="religious" class="img" style="background-image: url(myimg/Vella.webp);">
                <div class="text">
                <h3>Cleaning villas </h3>
        		<span>View all services</span>
                </div>
            </a>
        </div>
    </div>
</div>
</div>
</section>




  
@endsection
    
