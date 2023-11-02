<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Charts\MonthlyUsersChart;
use App\Charts\StudentChart;
use App\Charts\ShiftClassChart;
use App\Charts\SchecduleCourseChart;


class ChartController extends Controller
    {
     public function index (MonthlyUsersChart $chart, StudentChart $chartT, ShiftClassChart $chartTT, SchecduleCourseChart $chartTTT)
            {
                return view('Dashboared', 
                      [
                          'chart' => $chart->build(), 
                          'chartT' => $chartT->build(), 
                          'chartTT' => $chartTT->build(),
                          'chartTTT' => $chartTTT->build()  
                      ]);
            } 

    }
