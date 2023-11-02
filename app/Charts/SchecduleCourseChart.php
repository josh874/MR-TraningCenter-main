<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;

class SchecduleCourseChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chartTTT = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\DonutChart
    {
        return $this->chartTTT->donutChart()
            ->setTitle('Course Schedule')
            ->setSubtitle('Based on Courses.')
            ->addData([
                \App\Models\Student::where('coursetime', '=', '2:30 -- 4:00')->count(),
                \App\Models\Student::where('coursetime', '=', '4:30 -- 6:00')->count(),
                \App\Models\Student::where('coursetime', '=', '7:30 -- 9:00')->count(),
                \App\Models\Student::where('coursetime', '=', '9:30 -- 11:00')->count(),
                \App\Models\Student::where('coursetime', '=', '11:30 -- 1:00')->count()
                     ])
            ->setLabels(['2:30-4:00', '4:30-6:00', '7:30-9:00','9:30-11:00','11:30-1:00']);
    }
}
