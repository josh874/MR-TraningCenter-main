<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;

class MonthlyUsersChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
         $this->chart = $chart;
    }
    

    public function build (): \ArielMejiaDev\LarapexCharts\PieChart
    {
        return $this->chart->pieChart()
            ->setTitle('Course Distribution')
            ->setSubtitle('Season 2021.')
            ->addData([
                \App\Models\Student::where('courcetype', '=', 'C++')->count(),
                \App\Models\Student::where('courcetype', '=', 'Java')->count(),
                \App\Models\Student::where('courcetype', '=', 'Advanced Java')->count(),
                \App\Models\Student::where('courcetype', '=', 'Web Development')->count(),
                \App\Models\Student::where('courcetype', '=', 'React')->count(),
                \App\Models\Student::where('courcetype', '=', 'Mern Stack')->count(),
                \App\Models\Student::where('courcetype', '=', 'Pyhton')->count(),
                \App\Models\Student::where('courcetype', '=', 'Microsoft office')->count(),
                \App\Models\Student::where('courcetype', '=', 'Flutter')->count(),
                \App\Models\Student::where('courcetype', '=', 'Game Development')->count(),
                \App\Models\Student::where('courcetype', '=', 'Graphics Design')->count()
                 ])
            ->setLabels(['C++', 'Java', 'Advanced Java',
                        'Web Development','React','Mern Stack','Python','Microsoft office',
                        'Flutter','Game Development','Graphics Design']);
    }

}
