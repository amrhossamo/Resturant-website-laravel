
    @extends('adpanel')

    @section('cont')

    
    <h1>Create item</h1>
 
<div class=" row">
@if ($errors->any())
     <div class="alert alert-danger">
         <ul>
             @foreach ($errors->all() as $error)
                 <li>{{ $error }}</li>
             @endforeach
         </ul>
     </div>
 @endif
</div>
  


 
 <form  action="{{route('items.store')}}" method="post" enctype="multipart/form-data"  >

   @csrf
    <div class="mb-3 "  >
        <label  class="">Item Name</label>
        <input type="text" class="" name="name"  value="{{ old('name') }}">
    </div> 

    <div class="mb-3">
        <label  class="form-label" >Image</label>
        <input type="file" name="img"  value="{{ old('img') }}" >
    </div>

    <div class="mb-3">
        <label class="form-label" >Price</label>
        <input type="text" name="price"  value="{{ old('price') }}">
    </div>

    <div class="mb-3">
        <label  class="form-label" >Category</label>
        <input type="text" name="category"  value="{{ old('category') }}">
    </div>

    <div class="mb-3">
        <label  class="form-label" >Description</label>
        <input type="text" name="description" value="{{ old('description') }}" >
    </div>

        <button type="submit"  value="submit" class="btn btn-primary">Submit</button>
 </form>





    @endsection
 

    
