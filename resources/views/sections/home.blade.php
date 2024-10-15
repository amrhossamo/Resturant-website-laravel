@extends('layouts.layout')

@section('title') Home @stop


@section('cont')

<!-- Home Baner -->



<!-- Hero -->
<div class="home-baner p-5 text-center bg-image rounded-3">
  
    <div class="banner-title d-flex justify-content-center align-items-center h-100">
      <div class="text-white">
        <h1 class="mb-3">Best food for your taste</h1>
        <p class="mb-3">Discover delectable cuisine and unforgettable moments in our welcoming, culinary haven.</p>
        <a class="btn btn-danger btn-lg btn-coustom" href="{{route('Bookings.create')}}" role="button">Book A Table</a>
        <a class="btn btn-outline-secondary  btn-coustom btn-lg" href="/menu" role="button">Explore Menu</a>

      </div>
    </div>
  </div>
</div>
<!-- Hero -->





<!-- menu -->
<section >
        <div class=" br-menu px-5 py-5">
          <h2>Browse Our Menu</h2>
          <div class="row d-flex justify-content-center">
              <div class="card col-md-2 col-6 product-card "  >
                <div class="product-img">
                  <img src="./images/icons/cake.png" alt="" class="card-img-top"> 
                </div>
                <div class="card-body text-center">
                  <h3 class="card-title  mb-3" >
                   Breakfast
                  </h3>
                  <h5  class="card-title c-t  ">In the new era of technology we look in the future with certainty and pride for our life.</h5>
                  <button type="button" class="btn  " >Explore Menu</button>
                </div>
              </div>
        
        
              <div class="card col-md-2 col-6 product-card ml-3"  >
                <div class="product-img">
                  <img src="./images/icons/cup.png" alt="" class="card-img-top">
                  
                </div>
                
                <div class="card-body text-center">
                  <h3 class="card-title  mb-3" >
                   Breakfast
                  </h3>
                  <h5 class="card-title c-t ">In the new era of technology we look in the future with certainty and pride for our life.</h5>
                  
                  <button type="button" class="btn" >Explore Menu</button>
                </div>
              </div>
        
              <div class="card col-md-2 col-6  product-card ml-3"  >
                <div class="product-img">
                  <img src="./images/icons/dish.png" alt="" class="card-img-top">
                  
                </div>
                <div class="card-body text-center">
                  <h3 class="card-title  mb-3" >
                   Breakfast
                  </h3>
                  <h5 class="card-title c-t ">In the new era of technology we look in the future with certainty and pride for our life.</h5>
                  
                  <button type="button" class="btn  " >Explore Menu</button>
                </div>
              </div>
              <div class="card col-md-2 col-6  product-card ml-3"  >
                <div class="product-img">
                  <img src="./images/icons/cup.png" alt="" class="card-img-top">
                  
                </div>
                
                
                <div class="card-body text-center">
                  <h3 class="card-title  mb-3" >
                   Breakfast
                  </h3>
                  <h5 class="card-title c-t ">In the new era of technology we look in the future with certainty and pride for our life.</h5>
                  
                  <button type="button" class="btn" >Explore Menu</button>
                </div>
              </div>
        
        
          </div>
        </div>
        
        </section>



        <!-- services -->

        
        <section >
        <div class=" br-menu px-5 py-5">
          <div class="services-title d-flex justify-content-center">
             <h2>We also offer unique services for your events</h2>
          </div>
          <div class="row d-flex justify-content-center">
              <div class=" col-md-2 col-6 product-card "  >
                
                  <img src="./images/menu/kebab.png" alt="kebab"  style="width: 100%;"> 
                
                <div class="card-body">
                  <h3 class="card-title  mb-3" >
                  Caterings
                  </h3>
                  <p>In the new era of technology we look in the future with certainty for life.</p>
                  
                </div>
              </div>
              <div class="col-md-2 col-6 product-card "  >  
                <img src="./images/menu/Birthdays.png" alt="" style="width: 100%;"> 
              <div class="card-body">
                <h3 class="card-title  mb-3" >
                Birthdays
                </h3>
                <p>In the new era of technology we look in the future with certainty for life.</p>
              </div>
            </div>
            <div class=" col-md-2 col-6 product-card "  >
                
                <img src="./images/menu/Weddings.png" alt=""  style="width: 100%;"> 
              
              <div class="card-body">
                <h3 class="card-title  mb-3" >
                Weddings
                </h3>
                <p>In the new era of technology we look in the future with certainty for life.</p>
              </div>
            </div>
            <div class="col-md-2 col-6 product-card "  >
                
                <img src="./images/menu/Events.png" alt=""  style="width: 100%;"> 
              
              <div class="card-body">
                <h3 class="card-title  mb-3" >
                Events
                </h3>
                <p>In the new era of technology we look in the future with certainty for life.</p>
              </div>
            </div>
        
        
        
        
          </div>
        </div>
        
        </section>


        


    



@stop
