<?php
function calculateGrade($marks) {
    if ($marks >= 60) {
        return 'First Division';
    } elseif ($marks >= 45 && $marks <= 59) {
        return 'Second Division';
    } elseif ($marks >= 33 && $marks <= 44) {
        return 'Third Division';
    } else {
        return 'Fail';
    }
}

$studentMarks = 75;
$studentGrade = calculateGrade($studentMarks);
echo "Student marks: $studentMarks\n";
echo "Student grade: $studentGrade\n";