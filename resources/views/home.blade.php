@extends('layout.master')

@section('title' , 'Home')


@section('page')

<div class="hero-wrap js-fullheight"
		style="background-image: url('myimg/carousel-1.jpg');"
		data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center"
				data-scrollax-parent="true">
				<div class="col-md-9 text text-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
					<!-- <a href="https://vimeo.com/45830194" class="icon-video popup-vimeo d-flex align-items-center justify-content-center mb-4">
          		<span class="ion-ios-play"></span>
            </a> -->
					<p class="caps" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Wash your car with us, and do not hesitate with Ditto Clean</p>
					<h1 data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Make your car cleaner and more comfortable with us</h1>
				</div>
			</div>
		</div>
	</div>

	<div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
		<div class="carousel-inner">
		  <div class="carousel-item active">
			<img src="myimg/home.1.jpg" class="d-block w-100" alt="...">
			<div class="carousel-caption">
			  <h1 style="color: white;">Make your home clean and tidy with our services</h1>
			  <p style="color: white;">Book with us and feel comfortable at the lowest prices</p>
			  <div class="text-center">
				<a href="book" class="btn btn-primary">View All Tours</a>
			</div>
			</div>
		  </div>
		  <div class="carousel-item">
			<img src="myimg/p90.webp" class="d-block w-100" alt="...">
			<div class="carousel-caption">
			  <h1 style="color: white;">Make your home clean and tidy with our services</h1>
			  <p style="color: white;">Book with us and feel comfortable at the lowest prices</p>
			  <div class="text-center">
				<a href="book" class="btn btn-primary">View All Tours</a>
			</div>
			</div>
		  </div>
		  <div class="carousel-item">
			<img src="myimg/carousel-3.jpg" class="d-block w-100" alt="...">
			<div class="carousel-caption">
			  <h1 style="color: white;">Make your home clean and tidy with our services</h1>
			  <p style="color: white;">Book with us and feel comfortable at the lowest prices</p>
			  <div class="text-center">
				<a href="book" class="btn btn-primary">View All Tours</a>
			</div>
			</div>
		  </div>
		</div>
		<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
		  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
		  <span class="visually-hidden">Previous</span>
		</button>
		<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
		  <span class="carousel-control-next-icon" aria-hidden="true"></span>
		  <span class="visually-hidden">Next</span>
		</button>
	  </div>
	  
	  <br>
	  <br>
	  <br>
	  <br>
	

	<section class="ftco-counter img" id="section-counter">
    	<div class="container">
    		<div class="row d-flex">
    			<div class="col-md-6 d-flex">
    				<div class="img d-flex align-self-stretch" style="background-image:url(myimg/about.jpg);"></div>
    			</div>
    			<div class="col-md-6 pl-md-5 py-5">
    				<div class="row justify-content-start pb-3">
		          <div class="col-md-12 heading-section ftco-animate">
		            <h2 class="mb-4">Make your car cleaner with us</h2>
		          </div>
				  <div class="col-md-6 d-flex align-self-stretch ftco-animate">
		            <div class="media block-6 services d-block">
		              <div class="icon"><span class="flaticon-paragliding"></span></div>
		              <div class="media-body">
		                <h3 class="heading mb-3">Activities</h3>
		                <p>We wash all types of cars and clean all types of homes</p>
		              </div>
		            </div>      
		          </div>
		          <div class="col-md-6 d-flex align-self-stretch ftco-animate">
		            <div class="media block-6 services d-block">
		              <div class="icon"><span class="flaticon-route"></span></div>
		              <div class="media-body">
		                <h3 class="heading mb-3">Clening Arrangement</h3>
		                <p>Providing service in all areas of Aqaba</p>
		              </div>
		            </div>    
		          </div>
		          <div class="col-md-6 d-flex align-self-stretch ftco-animate">
		            <div class="media block-6 services d-block">
		              <div class="icon"><span class="flaticon-tour-guide"></span></div>
		              <div class="media-body">
		                <h3 class="heading mb-3">competent person</h3>
		                <p>Responds to customer comments</p>
		              </div>
		            </div>      
		          </div>
		          <div class="col-md-6 d-flex align-self-stretch ftco-animate">
		            <div class="media block-6 services d-block">
		              <div class="icon"><span class="flaticon-map"></span></div>
		              <div class="media-body">
		                <h3 class="heading mb-3">Location Manager</h3>
		                <p>It prepares and secures all employment needs</p>
		              </div>
		            </div>      
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
        			<a href="archaeological" class="img" style="background-image: url(myimg/homes.webp);">
        				<div class="text">
        					<h3>Cleaning Homes</h3>
        					<span>View all services</span>
        				</div>
        			</a>
        		</div>
        	</div>
        	<div class="col-md-3 ftco-animate">
        		<div class="project-destination">
        			<a href="medical" class="img" style="background-image: url(myimg/Vella.webp);">
        				<div class="text">
        					<h3>Cleaning villas</h3>
        					<span>View all services</span>
        				</div>
        			</a>
        		</div>
        	</div>
        	<div class="col-md-3 ftco-animate">
        		<div class="project-destination">
        			<a href="enjoyment" class="img" style="background-image: url(myimg/Cars.png);">
        				<div class="text">
        					<h3>Cleaning Cars</h3>
        					<span>View all services</span>
        				</div>
        			</a>
        		</div>
        	</div>
        	<div class="col-md-3 ftco-animate">
        		<div class="project-destination">
        			<a href="religious" class="img" style="background-image: url(myimg/Motorcycle.jpg);">
        				<div class="text">
        					<h3>Motorcycle cleaning</h3>
        					<span>View all services</span>
        				</div>
        			</a>
        		</div>
        	</div>
        </div>
    	</div>
    </section>
	

    <section class="ftco-section ftco-no-pt">
    	<div class="container">
    		<div class="row justify-content-center pb-4">
          <div class="col-md-12 heading-section text-center ftco-animate">
            <h2 class="mb-4">The best types of cleaning</h2>
          </div>
        </div>
        <div class="row">
        	<div class="col-md-4 ftco-animate">
        		<div class="project-wrap">
        			<a href="petradetails" class="img" style="background-image: url(myimg/Clean.jpg);"></a>
        			<div class="text p-4">
        				<span class="price">5JOD</span>
        				<h3><a href="#">Steam cleaning of seats</a></h3>
        				
        				<ul>
        					<li><span class="flaticon-shower"></span>0</li>
        					<li><span class="flaticon-king-size"></span>0</li>
        					
        				</ul>
        			</div>
        		</div>
        	</div>
        	<div class="col-md-4 ftco-animate">
        		<div class="project-wrap">
        			<a href="wadidetails" class="img" style="background-image: url(myimg/Clean1.jpg);"></a>
        			<div class="text p-4">
        				<span class="price">4JOD</span>
        				
        				<h3><a href="#"></a>External car wash with water</h3>
						    <ul>
        					<li><span class="flaticon-shower"></span>0</li>
        					<li><span class="flaticon-king-size"></span>0</li>
							
        				</ul>
        			</div>
        		</div>
        	</div>
        	<div class="col-md-4 ftco-animate">
        		<div class="project-wrap">
        			<a href="aqabadetails" class="img" style="background-image: url(myimg/Clean2.webp);"></a>
        			<div class="text p-4">
        				<span class="price">3JOD/person</span>
        		
        				<h3><a href="#">Engine cleaning</a></h3>
        				<ul>
        					<li><span class="flaticon-shower"></span>1</li>
        					<li><span class="flaticon-king-size"></span>0</li>
        					
        				</ul>
        			</div>
        		</div>
        	</div>

        	<div class="col-md-4 ftco-animate">
        		<div class="project-wrap">
        			<a href="ammandetails" class="img" style="background-image: url(myimg/Clean3.jpg);"></a>
        			<div class="text p-4">
        				<span class="price">25JOD</span>
        				<h3><a href="#">Kitchen cleaning</a></h3>
        				<ul>
        					<li><span class="flaticon-shower"></span>2</li>
        					<li><span class="flaticon-king-size"></span>3</li>
        				</ul>
        			</div>
        		</div>
        	</div>
        	<div class="col-md-4 ftco-animate">
        		<div class="project-wrap">
        			<a href="alqiamadet" class="img" style="background-image: url(myimg/Clean5.jpg);"></a>
        			<div class="text p-4">
        				<span class="price">15 JD</span>
        				<h3><a href="#">Tile cleaning </a></h3>
        				
        				<ul>
        					<li><span class="flaticon-shower"></span>2</li>
        					<li><span class="flaticon-king-size"></span>3</li>
        				</ul>
        			</div>
        		</div>
        	</div>
        	<div class="col-md-4 ftco-animate">
        		<div class="project-wrap">
        			<a href="deaddetails" class="img" style="background-image: url(myimg/Clean4.jpg);"></a>
        			<div class="text p-4">
        				<span class="price">30JOD</span>
        				<h3><a href="#">Carpet cleaning</a></h3>
        			
        				<ul>
        					<li><span class="flaticon-shower"></span>2</li>
        					<li><span class="flaticon-king-size"></span>2</li>
        				</ul>
        			</div>
        		</div>
        	</div>
        </div>
    	</div>
		<div class="text-center">
			<a href="book" class="btn btn-primary">View All services</a>
		</div>
    </section>




    
@endsection
    
