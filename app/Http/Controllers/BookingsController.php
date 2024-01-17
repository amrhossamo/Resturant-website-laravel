<?php

namespace App\Http\Controllers;

use App\Models\Bookings;
use App\Http\Controllers\Controller;
use App\Http\Requests\BookingRequest;
use App\Models\User;
use App\Notifications\BookingStatusNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;

class BookingsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bookings = Bookings::all();
        return view('adminbookings' , compact('bookings'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('bookingscreate');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BookingRequest $request)
    {
      

        $bookings = [
            'user_id' => auth()->id(),
            'start_time' => $request->start_time,
            'end_time' => $request->end_time,
            'num_people' => $request->num_people,
            'status' => 'pending',
        ];
        Bookings::create($bookings);
        
        return redirect()->route('Bookings.create');
    }

    /**
     * Display the specified resource.
     */
    public function show($bookings)
    {
         $bookings = Bookings::where('user_id' , $bookings)->get();  
         return view('mybookings',compact('bookings'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Bookings $bookings)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Bookings $bookings)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Bookings $bookings)
    {
        //
    }
    public function confirmbooking($id)
    {
        $bookings = Bookings::findOrFail($id);
        $bookings->status = 'confirmed';
        $bookings->save();


        $bookings->user->notify(new BookingStatusNotification('Your Table is confirmed'));


        return 'Booking confirmed successfully';
    }
    public function rejectbooking($id)
    {
        $bookings = Bookings::findOrFail($id);
        $bookings->status = 'rejected';
        $bookings->save();

        $bookings->user->notify(new BookingStatusNotification('Your Table is rejected'));


        return 'Booking rejected successfully';
    }
  




}
