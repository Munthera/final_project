@extends('layout.master')

@section('Tour')

@section('page')
<br><br><br><br><br>



<table class="table">
    <thead>
      <tr>
        <th scope="col">Tour name </th>
        <th scope="col">Data of the tour </th>
        <th scope="col">Tour price </th>
        <th scope="col">Days of tour </th>
        <th scope="col">Number of the clients </th>
        <th scope="col">Tour photo </th>

      </tr>
    </thead>
    <tbody>


       @foreach ($trip as $trip) 
        
        <tr>
            <td>{{$trip->trip_name}}</td>
            <td>{{$trip->date}}</td>
            <td>{{$trip->price}}</td>
            <td>{{$trip->days}}</td>
            <td>{{$trip->clients}}</td>
            <td>{{$trip->photo}}</td>
        </tr>

    @endforeach 



@endsection