<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Student extends Model
{
    use HasFactory, HasFactory, Notifiable;
    protected $fillable = [
        'firstname',
        'lastname',
        'addres',
        'age',  
        'courcetype',  
        'email',  
        'coursetime', 
        'phonenumber',
        'previousCourse',  
        'sex',
        'day',     
    ];

    // protected $hidden = [
    //     'password',
    //     'remember_token',
    // ];

    // protected $casts = [
    //     'email_verified_at' => 'datetime',
    // ];
}
