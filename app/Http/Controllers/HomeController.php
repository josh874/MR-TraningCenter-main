<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class HomeController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }

   public function index()
    {
        $users=User::all();
        return view('home',compact('users'));
    }

   function Delete($id)
         {
             $Data= User::find($id);
             $Data->delete();
             return redirect()->back()->with('Deleted','Succesfully Deleted !');
         }

    function update(Request $request)
         {
             $Data= User::find($request->id);
             $Data->name = $request->name;
             $Data->email = $request->email;  
             $Data->phonenumber = $request->phonenumber;          
             $Data->address = $request->address;
             $Data->save();
             return redirect()->back()->with('Updated',' Succesfully Updated !'); 
         }
}
