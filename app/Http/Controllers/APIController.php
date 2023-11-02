<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use Validator;

class APIController extends Controller
{
   function getApiData()
    {
            return User::all();        
    }

    public function delete($id)
       {
               return ["result"=>"Requested data are deleted ".$id];
       }
    public function search($name)
       {
        //        return User::where("id",$name)->get();
               return User::where("name","like","%".$name."%")->get();
       }

    public function APIValidation(Request $request)
       {
            $rules=array(
                          "id"=>"required|min:3|max:5",
                          "sex"=>"required|min:5|max:5"
                        );

            $Validator = Validator::make($request->all(),$rules);

            if($Validator->fails())
               {
                return $Validator->errors();
               }
            else 
               {
                 return ["result"=>"successfully registered"];
               }
       }
    
}
