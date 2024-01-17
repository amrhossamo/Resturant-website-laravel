
@extends('adpanel')

@section('cont')

<table class="w-75 container  table table-dark table-striped ">
        <tr>
             <th>User</th>
             <th>Date</th>
             <th>Time</th>
             <th>Number of People</th>
             <th>Status</th>
             <th>Confirm</th>
             <th>Reject</th>
             
             
        </tr>
        @foreach ($bookings as $booking)
         @if ($booking->status === 'pending')
        <tr>
           
            <td>{{$booking->user->name}}</td>
            <td>{{$booking->start_time}}</td>
            <td> {{$booking->end_time}}</td>
            <td>{{$booking->num_people}}</td>
            <td>{{$booking->status}}</td>
            <td> 
                <form action="{{ route('bookings.confirm', ['booking' => $booking->id]) }}" method="post">
                         @csrf
                        <button class="btn btn-primary" type="submit">Confirm Booking</button>
                 </form>       
            </td>
            
            <td>
            <form action="{{ route('bookings.reject', ['booking' => $booking->id]) }}" method="post">
                         @csrf
                        <button class="btn btn-danger " type="submit">Reject Booking</button>
                 </form>
            </td>

        </tr>
        @endif

   

     @endforeach  

     </table>

@endsection
     
