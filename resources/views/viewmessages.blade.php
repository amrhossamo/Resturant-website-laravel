@extends('adpanel')



@section('cont')
<table class="w-75 container table table-dark table-striped ">
        <tr>
             <th>ID</th>
             <th>Name</th>
             <th>email</th>
             <th>message</th>
          
        </tr>
     @foreach ($messages as $message)
        <tr>
            <td>{{$message->id}}</td>
            <td>{{$message->name}}</td>
            <td>{{$message->email}}</td>
            <td>{{$message->message}}</td>
          
        </tr>
     @endforeach   
     </table>
     



@endsection

