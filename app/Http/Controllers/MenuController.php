<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\items;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function menu(){
        $menus = items::get();
        return view('sections.menu' , compact('menus'));
    }
    
}
