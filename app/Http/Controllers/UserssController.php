<?php

namespace App\Http\Controllers;

use App\Models\userss;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserssController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       return 'user';
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('users');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $users = new userss();
        $users->username = $request->username;
        $users->password = $request->password;
        $users->save();
        return 'done';

    }

    /**
     * Display the specified resource.
     */
    public function show(userss $userss)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(userss $userss)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, userss $userss)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(userss $userss)
    {
        //
    }
}
