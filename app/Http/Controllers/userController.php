<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DataTables\userDataTable;

class userController extends Controller
{
       public function index(userDataTable $DataTableValues)
           {
               return $DataTableValues->render('user');
           }
}
