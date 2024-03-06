<?php

namespace App\Charts;

use ConsoleTVs\Charts\Classes\ChartJs\Chart;

class FeeCompareChart extends Chart
{
    /**
     * Initializes the chart.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();

        $this->labels(['Collected Fee', 'Due Fee'])
            ->title('Fee Compare')
            ->loaderColor('#2e5d8c')
            ->options([
                'legend' => [
                    'display' => true,
                ]
            ]);
    }
}
