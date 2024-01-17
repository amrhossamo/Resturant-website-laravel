@extends('layouts.layout')

@section('title') Menu @stop


@section('cont')

<div class="menu mb-5 ">
    <h1>Our Menu</h1>
    <p>We consider all the drivers of change gives you the components you need to change to create a truly happens.</p>
</div >
<div class=" varity">
<a class="btn btn-outline-danger " href="#" role="button">All</a>
<a class="btn btn-outline-danger " href="#" role="button">Breakast</a>
<a class="btn btn-outline-danger " href="#" role="button">Main Dishes </a>
<a class="btn btn-outline-danger " href="#" role="button">Drinks</a>
<a class="btn btn-outline-danger " href="#" role="button">Desrets</a>

</div>


  <div class="container mt-5">
  <div class="row justify-content-evenly">
  @foreach ($menus as $menu)
      <div class="card col-md-3 col-6 product-card w-100" style="width: 18rem; height:27rem" >
        <div class="product-img">
          <img src="{{ URL::asset('images/'. $menu->img) }}" alt="" class="w-100">
          <!-- <div class="overlay" [class.hidden]="!isHovered[i]">
            <fa-icon [icon]="Star"></fa-icon>
            <fa-icon [icon]="Star"></fa-icon>
            <fa-icon [icon]="Star"></fa-icon>
          </div> -->
        </div>
        
        <div class="card-body text-center">
            
          <h5 class="card-title h5 c-t fs-5 mb-3" >$ {{ $menu->price }}</h5>
          <h4 class="card-title fs-6 mb-3" >
            <a href="">{{ $menu->name }}</a>
          </h4>
          <p>{{$menu->description}}</p>
          
         
         
        </div>
      </div>
      @endforeach
  </div>
</div>




@stop