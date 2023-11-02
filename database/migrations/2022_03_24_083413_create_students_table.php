<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('firstname');  
            $table->string('lastname');
            $table->string('addres');
            $table->integer('age');
            $table->string('courcetype');
            $table->string('email')->unique();        
            $table->string('coursetime');
            $table->string('phonenumber'); 
            $table->string('sex'); 
            $table->string('day'); 
            $table->string('previousCourse');
            $table->rememberToken();
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('students');
    }
}
