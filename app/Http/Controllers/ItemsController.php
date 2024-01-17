<?php

namespace App\Http\Controllers;

use App\Models\items;
use App\Http\Controllers\Controller;
use App\Http\Requests\itemsrequest;
use Illuminate\Http\Request;

class ItemsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = items::get();
        return view('viewitem', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('additem');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(itemsrequest $request)
    {
        $item = new items();
        $item->name = $request->name;

        //upload image
        $item->img = $request->img->getClientOriginalName();
        $request->img->move('images/', $item->img);


        $item->price = $request->price;
        $item->category =$request->category;
        $item->description = $request->description;

        $item-> save();

        return redirect()->route('items.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(items $items)
    {
        // 
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    {
        $up = items::find($id);
        return view('updateitem',compact('up'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
       $up = items::find($id);

       if ($request->hasFile('img')) {
        $image = $request->file('img');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images/'), $imageName);
        $up->img = $imageName;
    }
    
       $up->name = $request->name;
       $up->price = $request->price;
       $up->category =$request->category;
       $up->description = $request->description;

       $up->save();

       return redirect()->route('items.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
       $d = items::find($id)->delete();
       return 'deleted';
    }
}
