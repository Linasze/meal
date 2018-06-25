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
$age = $_POST['age'];
$activity = $_POST['activity'];
$sex2 = 1;
$sex = $_POST['sex'];
$purpose = $_POST['purpose'];

// Calculate calories

// Check are variables not empty
// if(empty($age)){
//  echo 'Enter Age';
// }elseif(empty($height)){
// 	echo 'Enter height';
// }elseif(empty($weight)){
// 	echo 'Enter weight';
// }elseif(!is_numeric($activity)){
// 	echo 'Choose activity';
// }elseif(!is_numeric($purpose)){
//     echo 'Choose purpose';
// }else{
$rezul = round(($men + ($men1 * $weight) + ($men2 * $height) - ($men3 * $age)) * $activity + $purpose,0); 
$rezul2 = round(($women + ($women1 * $weight) + ($women2 * $height) - ($women3 * $age)) * $activity + $purpose,0);
if ($sex == $sex2) {
	echo $rezul; 
	    
	}else{
	 echo $rezul2;
        
}
//}

?>




