  @extends ('layouts.layout')

  @section ('title')Create Tables @stop 



    @section ('cont')

</section>



@if (Route::has('login'))

@auth

<section class="booking-form  h-75 " >
  <div>
    <h1>Book A Table</h1>
    <p>We consider all the drivers of change gives you the components <br> you need to change to create a truly happens.</p>
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

<form action="{{route('Bookings.store')}}" method="POST"  class="booking-fb" >
    @csrf
  <!-- Email input -->
  <div data-mdb-input-init class="form-outline mb-4">
        <label class="form-label" for="form1Example1">Date</label>
        <input type="date" name="start_time"  class="form-control" />
  </div>
  <!-- Password input -->
  <div data-mdb-input-init class="form-outline mb-4">
          <label class="form-label" for="form1Example2">Time</label>
          <input type="time" name="end_time" class="form-control" />
  </div>
  <div data-mdb-input-init class="form-outline mb-4">
          <label class="form-label" for="form1Example2">Number of People</label>
          <input type="text" name="num_people" class="form-control" />
  </div>
  <!-- Submit button -->
  <button data-mdb-ripple-init type="submit" class=" btn-block b-b">Book A Table</button>
</form>

</section>

@else 

<section class="booking-form  h-75 " >
  <div>
    <h1>Book A Table</h1>
    <p>We consider all the drivers of change gives you the components <br> you need to change to create a truly happens.</p>
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
    <h2 style="color: red;">You Have To login First</h2>
<form action="{{route('Bookings.store')}}" method="POST"  class="booking-fb" >
    @csrf
  <!-- Email input -->
  <div data-mdb-input-init class="form-outline mb-4">
        <label class="form-label" for="form1Example1">Date</label>
        <input type="date" name="start_time"  class="form-control" />
  </div>
  <!-- Password input -->
  <div data-mdb-input-init class="form-outline mb-4">
          <label class="form-label" for="form1Example2">Time</label>
          <input type="time" name="end_time" class="form-control" />
  </div>
  <div data-mdb-input-init class="form-outline mb-4">
          <label class="form-label" for="form1Example2">Number of People</label>
          <input type="text" name="num_people" class="form-control" />
  </div>
  <!-- Submit button -->

</form>

</section>

@endauth




@endif





@stop