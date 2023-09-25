<?php

$studentGrades = [
    "Student1" => [
        "Math" => 85,
        "English" => 90,
        "Science" => 78
    ],
    "Student2" => [
        "Math" => 92,
        "English" => 88,
        "Science" => 95
    ],
    "Student3" => [
        "Math" => 78,
        "English" => 82,
        "Science" => 87
    ]
];

function calculateAndPrintAverageGrades($grades) {
    foreach ($grades as $student => $subjects) {
        $total = 0;
        $count = 0;
        
        foreach ($subjects as $subject => $grade) {
            $total += $grade;
            $count++;
        }
        
        $average = $total / $count;
        printf("%s's average grade is: %0.2f", $student, $average);
        echo PHP_EOL;
    }
}

calculateAndPrintAverageGrades($studentGrades);
