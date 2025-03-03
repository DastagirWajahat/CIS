<?php

namespace App\Charts;

use ConsoleTVs\Charts\Classes\Chartjs\Chart;

class batchbarchart extends Chart
{
    public function __construct($batchCounts)
    {
        parent::__construct();

        $batchNames = [
            1 => '2023',
            2 => '2022',
            3 => '2021',
        ];

        // Define custom colors for each department
        $batchColors = [
            '2023' => '#FF6384', // Red
            '2022' => '#36A2EB', // Blue
            '2021' => '#008000', // Green
        ];

        $labels = [];
        $data = [];
        $colors = [];
        
        foreach ($batchCounts as $batch) {
            $batchName = $batchNames[$batch['batch']] ?? 'Unknown'; // Default 'Unknown'
            $labels[] = $batchName;
            $data[] = $batch['count'];
            // Add the color for the corresponding department
            $colors[] = $batchColors[$batchName] ?? '#999999'; // Default to gray if no color is defined
        }

        $this->labels($labels) // Set chart labels
             ->dataset('Students by batch', 'bar', $data) // Set dataset and chart type
             ->options([
                 'backgroundColor' => $colors, // Apply the custom colors to the bars
                 'scales' => [
                     'y' => [
                         'beginAtZero' => true, // Start Y-axis at zero
                         'title' => [
                             'display' => true,
                             'text' => 'Number of Students', // Label for the Y-axis
                         ],
                     ],
                     'x' => [
                         'title' => [
                             'display' => true,
                             'text' => 'batches', // Label for the X-axis
                         ],
                     ],
                 ],
                 'legend' => [
                     'display' => false, // Hide legend for bar chart
                 ],
             ]);
    }
}
