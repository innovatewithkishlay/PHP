<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Grades</title>
    <link rel="stylesheet" href="index.css"> 
</head>
<body>

<h1>Student Performance Report</h1>

<div class="container">
    <?php
    $students = [
        [
            "name" => "John Doe",
             "scores" => ["Math" => 85, "Science" => 78, "English" => 90]
        ],
        ["name" => "Jane Smith", "scores" => ["Math" => 92, "Science" => 88, "English" => 79]],
        ["name" => "Michael Brown", "scores" => ["Math" => 70, "Science" => 65, "English" => 72]],
        ["name" => "Emily Johnson", "scores" => ["Math" => 95, "Science" => 94, "English" => 96]],
    ];

    function calculateGrade($average) {
        if ($average >= 90) return "A+";
        if ($average >= 80) return "A";
        if ($average >= 70) return "B";
        if ($average >= 60) return "C";
        return "F";
    }

    foreach ($students as $student) {
        $name = $student["name"];
        $scores = $student["scores"];
        $total = array_sum($scores);
        $average = $total / count($scores);
        $grade = calculateGrade($average);

        echo "<div class='card'>";
        echo "<h2>$name</h2>";
        echo "<p><strong>Subjects & Scores:</strong></p>";
        echo "<ul>";
        foreach ($scores as $subject => $score) {
            echo "<li>$subject: $score</li>";
        }
        echo "</ul>";
        echo "<p><strong>Total Marks:</strong> $total</p>";
        echo "<p><strong>Average Score:</strong> " . round($average, 2) . "</p>";
        echo "<p class='grade'><strong>Grade:</strong> $grade</p>";
        echo "</div>";
    }
    ?>
</div>

</body>
</html>
