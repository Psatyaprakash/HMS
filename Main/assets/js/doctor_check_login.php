<?php
include 'connection.php';

echo '<pre>';

print_r($_REQUEST);


//$p_id = $_REQUEST['NULL'];
$p_name = $_REQUEST['p_name'];
$p_email = $_REQUEST['p_email'];
$p_dob = $_REQUEST['p_dob'];
$p_gender = $_REQUEST['p_gender'];
$p_phone = $_REQUEST['p_phone'];
$p_address = $_REQUEST['p_address'];
$diseases = $_REQUEST['diseases'];
$message = $_REQUEST['message'];



echo $ins_stmt = "INSERT INTO patient(p_name,p_email,p_dob,p_gender,p_phone,p_address,diseases,message) 
VALUES ('$p_name','$p_email','$p_dob','$p_gender','$p_phone','$p_address','$diseases','$message')";

$result = mysqli_query($connect,$ins_stmt);

if($result){
   header('location:patient_details_view.php');
}


?>
