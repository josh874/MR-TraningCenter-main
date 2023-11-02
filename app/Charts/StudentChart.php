<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;

class StudentChart
{
    protected $chartT;

    public function __construct(LarapexChart $chart)
    {
        $this->chartT = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\pieChart
    {
        return $this->chartT->pieChart()
            ->setTitle('Gender Distribution')
            ->addData([
                \App\Models\User::where('sex', '=', 'male')->count(),
                \App\Models\User::where('sex', '=', 'female')->count()
                     ])
            ->setColors(['#ffc63b', '#ff6384'])
            ->setLabels(['Male', 'Female']);
    }
}
