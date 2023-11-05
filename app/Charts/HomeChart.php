<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;
use App\Models\TipoMedicion;

class HomeChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\LineChart
    {
        $tiposMediciones = TipoMedicion::pluck('nombre')->toArray();

        return $this->chart->lineChart()
        ->setTitle('Gráfica de temperatura')
        //->setSubtitle('Physical sales vs Digital sales.')
        ->addData('Physical sales', [40, 93, 35, 42, 18, '60%sss'])
        ->addData('Digital sales', [70, 29, 77, 28, 55, 45]);
        //->setXAxis($tiposMediciones);
    }
}
