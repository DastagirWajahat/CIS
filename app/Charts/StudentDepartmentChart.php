<?php

namespace App\Charts;

use ConsoleTVs\Charts\Classes\Chartjs\Chart;
// use App\Models\Student;
// use Illuminate\Support\Facades\DB;

class StudentDepartmentChart extends Chart
{
    public function __construct($departmentCounts)
    {
        parent::__construct();

        // Fetch data from the database
        // $departmentCounts = Student::select('semester', DB::raw('COUNT(*) as count'))
        //                      ->groupBy('semester')
        //                      ->get()
        //                      ->toArray();

        // Map department IDs to their names
        $departmentNames = [
            1 => '3rd Sem',
            2 => '5th Sem',
            3 => '7th Sem',
        ];

        // Define custom colors for each department
        $departmentColors = [
            '3rd Sem' => '#FF6384', // Red
            '5th Sem' => '#36A2EB', // Blue
            '7th Sem' => '#008000', // Yellow
        ];

        $labels = [];
        $data = [];
        $colors = [];
        
        foreach ($departmentCounts as $department) {
            $departmentName = $departmentNames[$department['semester']] ?? 'Unknown'; // Default 'Unknown'
            $labels[] = $departmentName;
            $data[] = $department['count'];
            // Add the color for the corresponding department
            $colors[] = $departmentColors[$departmentName] ?? '#999999'; // Default to gray if no color is defined
        }

        $this->labels($labels) // Set chart labels
             ->dataset('Students by Sem', 'pie', $data) // Set dataset and chart type
             ->options([
                 'backgroundColor' => $colors, // Apply the custom colors to the pie chart
                //  'legend' => [
                //      'display' => false,
                //      'position' => 'right',
                //  ],
             ]);
    }
}
