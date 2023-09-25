<?php

$grades = array(85, 92, 78, 88, 95);

function sortGradesDescending($grades) {
    arsort($grades);
    return $grades;
}

$sortedGrades = sortGradesDescending($grades);
print_r($sortedGrades);

?>
