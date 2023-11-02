<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

   public function index()
    {
        $students=Student::all();
        return view('Studentlist',compact('students'));
    }
    
   function Delete($id)
         {
             $Data= Student::find($id);
             $Data->delete();
             return redirect()->back()->with('Deleted','Succesfully Deleted !');
         }

    function update(Request $request)
         {
             $Data= Student::find($request->id);
             $Data->firstname = $request->name;
             $Data->email = $request->email;  
             $Data->phonenumber = $request->phonenumber;          
             $Data->address = $request->address;
             $Data->save();
             return redirect()->back()->with('Updated',' Succesfully Updated !'); 
         }

    protected function validator(Request $request)
        {
            return Validator::make($request, [
                'firstname' => ['required', 'string', 'max:255'],
                'lastname' => ['required', 'string', 'max:255'],
                'addres' => ['required', 'string', 'max:10'],
                'age' => ['required', 'integer', 'max:50'],
                'courcetype' => [ 'string', 'max:50'], 
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                'coursetime' => ['integer', 'max:50'],
                'phonenumber' => ['required', 'string', 'max:255'],
                'previousCourse' => [ 'string'], 
                'sex' => ['required', 'string', 'max:255'], 
                'day' => ['required', 'string', 'max:255'],          
            ]);
        }
        
    protected function Create(Request $request)
        {
             Student::create([
                'firstname' => $request['firstname'],
                'lastname' => $request['lastname'],
                'addres' => $request['addres'],
                'age' => $request['age'],
                'courcetype' => $request['courcetype'],
                'email' => $request['email'],
                'coursetime' => $request['coursetime'],
                'phonenumber' => $request['phonenumber'],
                'sex' => $request['sex'],
                'day' => $request['day'],
                'previousCourse' => $request['previousCourse'],
                
            ]);
            return redirect()->back()->with('success','Student succesfully registerd !');
        }
    
}
