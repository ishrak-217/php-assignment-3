<?php

$studentGrades = [
    "Student1" => [
        "Math"    => 85,
        "English" => 90,
        "Science" => 78,
    ],
    "Student2" => [
        "Math"    => 92,
        "English" => 88,
        "Science" => 95,
    ],
    "Student3" => [
        "Math"    => 78,
        "English" => 82,
        "Science" => 70,
    ],
];

function getLetterGrade( $numericGrade ) {

    if ( $numericGrade >= 90 ) {
        return 'A+';
    } elseif ( $numericGrade >= 85 ) {
        return 'A';
    } elseif ( $numericGrade >= 80 ) {
        return 'A-';
    } elseif ( $numericGrade >= 75 ) {
        return 'B+';
    } elseif ( $numericGrade >= 70 ) {
        return 'B';
    } elseif ( $numericGrade >= 65 ) {
        return 'B-';
    } elseif ( $numericGrade >= 60 ) {
        return 'C+';
    } elseif ( $numericGrade >= 55 ) {
        return 'C';
    } elseif ( $numericGrade >= 50 ) {
        return 'C-';
    } elseif ( $numericGrade >= 45 ) {
        return 'D';
    } else {
        return 'F';
    }

}

function calculateAndPrintAverageGrades( $grades ) {

    foreach ( $grades as $student => $subjects ) {
        $total = 0;
        $count = 0;

        foreach ( $subjects as $subject => $grade ) {
            $total += $grade;
            $count++;
        }

        $average = $total / $count;
        $letterGrade = getLetterGrade( $average );
        echo "$student's average grade: $letterGrade\n";
    }

}

calculateAndPrintAverageGrades( $studentGrades );
