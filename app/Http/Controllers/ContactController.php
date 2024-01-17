<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequest;
use App\Models\messagges;
use Illuminate\Http\Request;

class ContactController extends Controller
{
   public function index(){
    return view('sections.contact');
   }
   public function insert(ContactRequest $request){
    $messages = new messagges();
    $messages->name =$request->name;
    $messages->email =$request->email;
    $messages->message =$request->message;

    $messages->save();
    
   }

   public function contactshow(){

      $messages = messagges::get();
      return view('viewmessages',compact('messages'));

   }
}
