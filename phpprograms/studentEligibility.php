<!-- Certainly! Here's a PHP program that determines eligibility for admission to a professional course based on the specified criteria:

php
Copy code -->
<?php
// Input marks obtained in Physics, Chemistry, and Mathematics
$physicsMarks = 65;
$chemistryMarks = 51;
$mathematicsMarks = 72;

// Calculate the total marks obtained in all three subjects
$totalMarksAllSubjects = $physicsMarks + $chemistryMarks + $mathematicsMarks;

// Calculate the total marks obtained in Mathematics and Physics
$totalMathsAndPhysics = $physicsMarks + $mathematicsMarks;

// Define eligibility criteria
$mathsCriteria = $mathematicsMarks >= 65;
$phyCriteria = $physicsMarks >= 55;
$chemCriteria = $chemistryMarks >= 50;
$totalCriteria = $totalMarksAllSubjects >= 190 || $totalMathsAndPhysics >= 140;

// Check eligibility based on criteria
if ($mathsCriteria && $phyCriteria && $chemCriteria && $totalCriteria) {
    echo "The candidate is eligible for admission.";
} else {
    echo "The candidate is not eligible for admission.";
}
?>