<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <title>My Bookings</title>
</head>
<body>

<x-app-layout >









<table class="w-75 container  table table-dark table-striped ">
  <h1 class="text-center">Pending Bookings</h1>
        <tr>
             <th>User</th>
             <th>Date</th>
             <th>Time</th>
             <th>Number of People</th>
             <th>Status</th>  
        </tr>
        @foreach ($bookings as $booking)
        @if ($booking->status === 'pending')
        <tr>
           
            <td>{{$booking->user->name}}</td>
            <td>{{$booking->start_time}}</td>
            <td> {{$booking->end_time}}</td>
            <td>{{$booking->num_people}}</td>
            <td >{{$booking->status}}</td>
        </tr>
        @endif
         @endforeach  

     <form  action="{{route('Bookings.create')}}">
         <button class="btn btn-danger">Book a Table</button>
   </form>
 </table>
 

     <table class="w-75 container  table table-dark table-striped ">
  <h1 class="text-center">Pervious Bookings</h1>
        <tr>
             <th>User</th>
             <th>Date</th>
             <th>Time</th>
             <th>Number of People</th>
             <th>Status</th>  
        </tr>
        @foreach ($bookings as $booking)
        @if ($booking->status === 'confirmed' )
        <tr>
           
            <td>{{$booking->user->name}}</td>
            <td>{{$booking->start_time}}</td>
            <td> {{$booking->end_time}}</td>
            <td>{{$booking->num_people}}</td>
            <td >{{$booking->status}}</td>
        </tr>
        @endif
        @if ($booking->status ==='rejected' )
        <tr>
 
           <td>{{$booking->user->name}}</td>
           <td>{{$booking->start_time}}</td>
           <td> {{$booking->end_time}}</td>
           <td>{{$booking->num_people}}</td>
           <td >{{$booking->status}}</td>
       </tr>
      
        @endif
         @endforeach  

   <form  action="{{route('Bookings.create')}}">
 
   </form>
     </table>

   
</x-app-layout>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>