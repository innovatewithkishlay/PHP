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
        if($average>=90) return ["grade"=>"Excellent","color"=> "green"];
        if($average>=80) return ["grade"=>"Good","color"=>"blue"];
        if($average>=70) return ["grade"=>"Average","color"=>"yellow"];
        if($average>=60) return ["grade"=>"Below Average","color"=>"orange"];
        return ["grade"=>"Failed","color"=>"red"];
    }

    foreach ($students as $student){
        $name=$student["name"];
        $subject_count=count($student["scores"]);
        $total_marks=array_sum($student["scores"]);
        $average=($total_marks)/($subject_count);
        echo "<div class='bg-white w-[450px] h-[400px] rounded-lg drop-shadow-[rgba(255,255,255,1)] p-[20px] mt-[20px]'>";
        echo "<h2 class='text-blue-400 text-[17px] font-medium  text-center'>$name</h2>";
        echo "<p>Subject & Scores</p>";
        echo "<ul>";
        echo "<div class='flex flex-col gap-y-[10px] mt-[10px]'>";
        foreach($student["scores"] as $subject=>$score){
            echo "<li class='px-[20px] bg-gray-300 rounded-md '>$subject: $score</li>";
        }
        echo "</div>";
        echo "<p class='mt-[10px]'>Total Marks: $total_marks</p>";
        echo "<p>Average Marks:" .round($average,2) ."</p>";
        $grade_got=calculateGrade($average);
        echo "<p class='flex justify-center item-center m-[40px] w-[150px] h-[50px]  bg-[".$grade_got["color"]."] rounded-md text-center text-white'>" .$grade_got["grade"]."</p>";
        echo "</div>";
    }
    ?>
</div>

</body>
</html>
