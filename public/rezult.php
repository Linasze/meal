<?php

// Data definition

$men = 66.5;
$men1 = 13.75;
$men2 = 5.003;
$men3 = 6.755;
$women =  655.1;
$women1 = 9.563;
$women2 = 1.850;
$women3 = 4.676;
$weight = $_POST['weight'];
$height = $_POST['height'];
$years = $_POST['years'];
$month = $_POST['month'];
$day = $_POST['day'];
$activity = $_POST['activity'];
$sex2 = 1;
$sex = $_POST['sex'];
$purpose = $_POST['purpose'];


if($purpose == ""){
 echo "Please select your purpose";
}elseif(empty($sex)){
    echo "Please choose your gender";
}elseif(empty($years)){
    echo "Please select years that your born";
}elseif(empty($month)){
    echo "Please select month that your born";
}elseif(empty($day)){
    echo "Please select day that your bord";
}elseif(empty($activity)){
    echo "Please choose your physical activity";
}else{

if(is_numeric($years) && is_numeric($month) && is_numeric($day)){
 $age = (date("md", date("U", mktime(0, 0, 0, $month, $day, $years))) > date("md")? ((date("Y") - $years) - 1) : (date("Y") - $years));
}
// Calculate calories
$rezul = round(($men + ($men1 * $weight) + ($men2 * $height) - ($men3 * $age)) * $activity + $purpose,0);
$rezul2 = round(($women + ($women1 * $weight) + ($women2 * $height) - ($women3 * $age)) * $activity + $purpose,0);
if ($sex == $sex2) {
    echo $rezul;
    }else{
    echo $rezul2;
}
}

?>




