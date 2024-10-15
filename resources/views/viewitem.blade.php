@extends('adpanel')

@section('title') ViewItems @stop


@section('cont')
<table  class="w-75 container table table-dark table-striped ">
        <tr >
             <th>ID</th>
             <th>Name</th>
             <th>Image</th>
             <th>Price</th>
             <th>Category</th>
             <th>Discription</th>
             <th>Edit</th>   
             <th>Delete</th>  
        </tr>
     @foreach ($items as $item)
        <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->name}}</td>
            <td> <img src="{{ URL::asset('images/'. $item->img) }}" width="100px" alt=""> </td>
            <td>{{$item->price}}</td>
            <td>{{$item->category}}</td>
            <td>{{$item->description}}</td>
            <td>
            <button type="button" class="btn btn-outline-primary"><a href="{{route('items.edit',$item->id)}}">Update</a></button>
             <td>
                 <form action="{{route('items.destroy',$item->id)}}" method="post">
                    @csrf
                    @method('Delete')
                    <input class="btn btn-danger " type="submit" value="Delete">
                </form>
             </td>   
               
            </td>
        </tr>
     @endforeach   
     </table>
     



@endsection


    