<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Grades</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-black">
<h1 class="flex justify-center text-white text-[30px] mt-[20px] item-center font-medium">Student Performance Report</h1>

<div class="flex justify-between flex-wrap mx-[100px] flex-wrap gap-x-[100px] mt-[40px]">
    <?php
    $students = [
        ["name"=>"Kishlay","scores"=>["Math"=>50,"Science"=>95,"Engish"=>98]],
        ["name" => "Jane Smith", "scores" => ["Math" => 92, "Science" => 88, "English" => 79]],
        ["name" => "Michael Brown", "scores" => ["Math" => 70, "Science" => 65, "English" => 72]],
        ["name" => "Emily Johnson", "scores" => ["Math" => 95, "Science" => 94, "English" => 96]],
    ];

    function calculateGrade($average){
        if($average>=90) return "Excellent";
        if($average>=80) return "Good";
        if($average>=70) return "Average";
        if($average>=60) return "Below Average";
        return "Failed";
    }

    foreach ($students as $student){
        $name=$student["name"];
        $subject_count=count($student["scores"]);
        echo "<div class='bg-white w-[300px] h-[300px] rounded-lg shadow-md p-[20px] mt-[20px]'>";
        echo "<h2 class='text-blue-400 text-[17px] font-medium  text-center'>$name</h2>";
        echo "</div>";
    }
    // foreach ($students as $student) {
    //     $name = $student["name"];
    //     $scores = $student["scores"];
    //     $total = array_sum($scores);
    //     $average = $total / count($scores);
    //     $grade = calculateGrade($average);

    //     echo "<div class='card'>";
    //     echo "<h2>$name</h2>";
    //     echo "<p><strong>Subjects & Scores:</strong></p>";
    //     echo "<ul>";
    //     foreach ($scores as $subject => $score) {
    //         echo "<li>$subject: $score</li>";
    //     }
    //     echo "</ul>";
    //     echo "<p><strong>Total Marks:</strong> $total</p>";
    //     echo "<p><strong>Average Score:</strong> " . round($average, 2) . "</p>";
    //     echo "<p class='grade'><strong>Grade:</strong> $grade</p>";
    //     echo "</div>";
    // }
    ?>
</div>

</body>
</html>
