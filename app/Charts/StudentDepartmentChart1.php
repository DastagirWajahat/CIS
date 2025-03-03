<?php

namespace App\Charts;

use ConsoleTVs\Charts\Classes\Chartjs\Chart;

class StudentDepartmentChart extends Chart
{
    /**
     * Initializes the chart.
     *
     * @return void
     */
    public function __construct(array $departments, array $studentCounts)
    {
        parent::__construct();

        // Set up the labels (departments) and data (student counts)
        $this->labels($departments)
            ->dataset('Students per Department', 'pie', $studentCounts)
            ->backgroundColor([
                '#4e73df', '#1cc88a', '#36b9cc', '#f6c23e', '#e74a3b', '#858796', '#5a5c69'
            ])
            ->title('Department-wise Student Distribution')
            ->options([
                'legend' => [
                    'display' => true,
                ]
            ]);
    }
}
