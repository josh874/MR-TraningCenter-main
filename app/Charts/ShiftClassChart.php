<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;

class ShiftClassChart
{
    protected $chartTT;

    public function __construct(LarapexChart $chart)
    {
        $this->chartTT = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\DonutChart 
    {
        return $this->chartTT->donutChart()
            ->setTitle('Previous Course Take')
            ->setSubtitle('Season 2021.')
            ->addData([
                \App\Models\Student::where('previousCourse', '=', 'YES')->count(),
                \App\Models\Student::where('previousCourse', '=', 'NO')->count()
                     ])
            ->setLabels(['YES', 'NO']);
    }
}
