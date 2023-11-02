<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{


    use RegistersUsers;

    protected $redirectTo = RouteServiceProvider::HOME;


    public function __construct()
    {
        $this->middleware('guest');
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],          
            'phonenumber' => ['required', 'string', 'max:255'],
            'address' => ['required', 'string', 'max:255'],
            'profile_photo' => ['required','image'],
        ]);
    }

    protected function create(array $data)
      {
        

        $user= new User;

        $user->name =$data['name'];
        $user->email =$data['email'];
        $user->password =Hash::make($data['password']);
        $user->phonenumber =$data['phonenumber'];
        $user->address =$data['address'];
        $user->sex =$data['sex'];
        $user->role =$data['role'];
        
        if($data['profile_photo'])
        {
            $file=$data['profile_photo'] ;
            $extention= $file->getClientOriginalExtension();
            $filename= time().'.'.$extention;
            $file->move('uploads/profile_image/',$filename);
            $user->profile_photo=$filename;
        }
        $user->save();

        return $user;
      }
}
