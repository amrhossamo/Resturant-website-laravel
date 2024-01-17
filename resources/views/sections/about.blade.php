@extends('layouts.layout')

@section('title') about @stop


@section('cont')

<!----------------------- the background image --------------->
<section class="content" >
    <div class="bg"> 
                <div class="titlee">
                    <div class="para">Feel the authentic & original taste from us</div>
                    <div class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="106" height="106" viewBox="0 0 106 106" fill="none">
                            <circle cx="53" cy="53" r="53" fill="white"/>
                            <path d="M49.8569 63.8798C48.5248 64.7124 46.7969 63.7547 46.7969 62.1838V45.336C46.7969 43.7652 48.5248 42.8075 49.8569 43.64L63.3351 52.0639C64.5884 52.8473 64.5884 54.6726 63.3351 55.4559L49.8569 63.8798Z" fill="#AD343E"/>
                          </svg>
                    </div>
                </div> 
        </div>
    
 
</section>


<!----------------------- Featuers ------------------->
<div class="d-flex justify-content-center ">
   
    <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
      <div class="col d-flex align-items-start">
        <div class="icon-square bg-light text-dark flex-shrink-0 me-3">
           <img src="../images/icons/menu.png" alt="">
        </div>
        <div>
          <h2>Multi Cuisine</h2>
          <p>In the new era of technology we look <br> the future with certainty life</p>
        
        </div>
      </div>
      <div class="col d-flex align-items-start">
        <div class="icon-square bg-light text-dark flex-shrink-0 me-3">
           <img src="../images/icons/order.png" alt="">
        </div>
        <div>
          <h2>Easy To Order</h2>
          <p>In the new era of technology we look<br> in the future with certainty life.</p>
         
        </div>
      </div>
      <div class="col d-flex align-items-start">
        <div class="icon-square bg-light text-dark flex-shrink-0 me-3">
           <img src="../images/icons/timer.png" alt="">
        </div>
        <div>
          <h2>Fast Delivery</h2>
          <p>In the new era of technology we look <br>in the future with certainty life</p>
         
        </div>
      </div>
    </div>
  </div>



<!-- Information section -->
<section class="contentt">

    <div class="rectangle">
        
    <div class="info">
        <div class="maskgroup">
            <img src="../images/food.png" alt="">

        </div>
        <div class="text">
            
            <div class="title">
                <h1>A little information for our valuable guest</h1>
                <p>At place, we believe that dining is not just about food, 
                but also about the overall experience. Our staff, renowned for 
                their warmth and dedication, strives to make every visit an unforgettable event.</p>
            </div>
            <div class="boxs">
                <div class="box">
                    <div class="lay">
                        <div class="text">
                            <h1>3</h1>
                            <p>Locations</p>
                    </div>
                  </div>
                </div>
                <div class="box">
                    <div class="lay">
                        <div class="text">
                            <h1>1995</h1>
                            <p>Founded</p>
                    </div>
                  </div>
                </div>
                <div class="box">
                    <div class="lay">
                        <div class="text">
                            <h1>65+</h1>
                            <p>Staff Members</p>
                    </div>
                  </div>
                </div>
                <div class="box">
                    <div class="lay">
                        <div class="text">
                            <h1>100%</h1>
                            <p>Satisfied Customers</p>
                    </div>
                  </div>
                </div>   
            </div>
        </div>
    </div>

    </div>

</section>



<!-- Customers section -->
<div class="container px-4 py-5" id="featured-3">
    <h2 class="pb-2 border-bottom d-flex justify-content-center">What Our Customers Say</h2>
    <div class=" row g-4 py-5 row-cols-1 row-cols-lg-3">
      <div class=" feature col">
        <h3>“The best restaurant”</h2>
        <p>Last night, we dined at place and were simply blown away. From the moment we stepped in, we were enveloped in an inviting atmosphere and greeted with warm smiles beautifully presented.</p>
        <div class="feature-icon  bg-gradient">
           <img src="../images/icons/sophi.png" alt="">
           <div class=" ml-3 feature-text">
             <h3>Sophire Robson</h3>
             <p>Los Angeles, CA</p>
           </div>
        </div>
      </div>
      <div class="feature col">
        <h3>“Simply delicious”</h2>
        <p>Place exceeded my expectations on all fronts. The ambiance was cozy and relaxed, making it a perfect venue for our anniversary dinner. Each dish was prepared and beautifully presented.</p>
        <div class="feature-icon  bg-gradient">
           <img src="../images/icons/matt.png" alt="">
           <div class=" ml-3 feature-text">
             <h3>Sophire Robson</h3>
             <p>Los Angeles, CA</p>
           </div>
          
        </div>
      </div>
      <div class="feature col">
       
        <h3>“One of a kind restaurant”</h2>
        <p>The culinary experience at place is first to none. The atmosphere is vibrant, the food - nothing short of extraordinary. The food was the highlight of our evening. Highly recommended.</p>
        <div class="feature-icon  bg-gradient">
           <img src="../images/icons/andy.png" alt="">
           <div class=" ml-3 feature-text">
             <h3>Sophire Robson</h3>
             <p>Los Angeles, CA</p>
           </div>
        </div>
        
      </div>
    </div>
  </div>


</section>
@stop