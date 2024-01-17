@extends('adpanel')

@section('title') ViewItems @stop


@section('cont')

<form class="container  w-25 " action="{{route('items.update',$up->id)}}" method="post" enctype="multipart/form-data" >
@method('patch')
 @csrf
<!-- Email name -->
  <div data-mdb-input-init class="form-outline mb-4">
        <label  class="form-label">Item Name</label>
         <input type="text" class="form-control" name="name" aria-describedby="emailHelp" value="{{$up->name}}">
  </div>

  <!-- Password input -->
  <div data-mdb-input-init class="form-outline mb-4">
         <label  class="form-label" >Image</label>
         <input type="file" name="img" class="form-control" >
         <img src="{{ URL::asset('images/'. $up->img) }}" width="100px" alt=""> 
  </div>
  <div data-mdb-input-init class="form-outline mb-4">
        <label class="form-label" >Price</label>
        <input type="text" name="price" class="form-control" value="{{$up->price}}" >
  </div>
  <div data-mdb-input-init class="form-outline mb-4">
        <label  class="form-label" >Category</label>
        <input type="text" name="category" class="form-control" value="{{$up->category}}" >
  </div>
  <div data-mdb-input-init class="form-outline mb-4">
        <label  class="form-label" >Description</label>
        <input type="text" name="description" class="form-control" value="{{$up->description}}" >
  </div>
  


  <!-- Submit button -->
  <button data-mdb-ripple-init type="submit" class="btn btn-primary btn-block">Update</button>
</form>


  
@stop


