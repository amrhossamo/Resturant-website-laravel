<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link rel="stylesheet" type="text/css" href="{{ asset('css/links.css') }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
   

    
  
    <title>Admin Panel</title>
  
</head>
<body>
<x-app-layout > 
     <!-- <div class="container mt-5 links">
            <button type="button" class="w-25   btn btn-outline-primary "><a href="{{route('items.create')}}">Add Item</a></button>
            <button type="button" class="w-25 btn btn-outline-primary"><a href="{{route('items.index')}}">View Item</a></button>
            <button type="button" class="w-25 btn btn-outline-primary"><a href="{{route('Bookings.index')}}">View Table Booking</a></button>
     </div> -->

     <section>
    <div class="sidebar">
        <h1 class="logo ">Admin Panel</h1>
        <ul class="nav">
            <li class="active"><a href="{{route('items.create')}}"><i class="fa-brands fa-windows"></i>Add Items</a></li>
            <li ><a href="{{route('items.index')}}"><i class="fa-solid fa-plus"></i>View Items</a></li>
            <li><a href="{{route('Bookings.index')}}"><i class="fa fa-shopping-bag"></i>View Bookings Table</a></li>
            <li><a href="{{route('contact.show')}}"><i class="fa fa-shopping-bag"></i>View Messages</a></li>



        </ul>
   
    </div>
    @yield('cont')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <script type="text/javascript">
        $('li').click(function(){
            $('li').removeClass('active');
            $(this).addClass('active')

        })

    </script>
     </section>  
</x-app-layout>
   
    





    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>