@extends('layout.master')

@section('title' , 'Categories')
@section('style')
<style>
    
</style>
@endsection
@section('page')
    

<br> 





<section class="ftco-section">
<div class="container">
    <div class="row justify-content-center pb-4">
  <div class="col-md-12 heading-section text-center ftco-animate">
    <h2 class="mb-4">Tours</h2>
  </div>
</div>

<div style="display: flex;flex-wrap:wrap">
@foreach ( $trips as $trips)


<div class="col-md-4 ftco-animate">
    <div class="project-wrap">
    
        <a href="{{ $trips->href}}" class="img" style="background-image: url({{ $trips->photo}});"></a>
        <div class="text p-4">
            <span class="price">{{ $trips->price}} JD/person</span>
            <span class="days">{{ $trips->days}}</span>
            <h3><a href="#">{{ $trips->trip_name}}</a></h3>
            
            <ul>
                <li><span class="flaticon-shower"></span>2</li>
                <li><span class="flaticon-king-size"></span>3</li>
                <li><span class="flaticon-mountains"></span></li>
            </ul>

        </div>
        
    </div>
    
</div>



@endforeach

</div>

</section>




  
@endsection
    
