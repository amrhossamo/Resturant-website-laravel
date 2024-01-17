@extends ('layouts.layout')

@section ('title')Create Tables @stop 



  @section ('cont')

</section>




<section class="booking-form  h-75 " >
<div>
  <h1>Get in touch with us</h1>
  <p >We love questions and feedback - and we're always happy to help!<br> Please email us using the form below and we will get back to you as soon as possible.</p>
</div>
      
  <div class="max-w-7xl mx-auto sm:px-6 lg:px-8  ">
          <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6 ">

                          <!-- Errors  -->
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
  </div>

<form action="{{route('contact')}}" method="POST"  class="booking-fb" >
  @csrf
<!-- Email input -->
<div data-mdb-input-init class="form-outline mb-4">
      <label class="form-label" for="form1Example1">Name</label>
      <input type="text" name="name"  class="form-control" />
</div>
<!-- Password input -->
<div data-mdb-input-init class="form-outline mb-4">
        <label class="form-label" for="form1Example2">Email</label>
        <input type="email" name="email" class="form-control" />
</div>
<div data-mdb-input-init class="form-outline mb-4">
        <label class="form-label" for="form1Example2">Message</label>
        <input type="text" name="message" class="form-control" />
</div>
<!-- Submit button -->
<button data-mdb-ripple-init type="submit" class=" btn-block b-b">Send</button>
</form>

</section>


@stop