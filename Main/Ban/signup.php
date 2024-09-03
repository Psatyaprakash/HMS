<?php
include 'connection.php';

echo '<pre>';

print_r($_REQUEST);


$p_id = $_REQUEST['NULL'];
$p_name = $_REQUEST['p_name'];
$p_dob = $_REQUEST['p_dob'];
$p_gender = $_REQUEST['p_gender'];

$p_address = $_REQUEST['p_address'];
//$disease = $_REQUEST['disease'];
//$d_id = $_REQUEST['d_id'];
$d_id = "SELECT * FROM doctor ORDER BY RANDOM() LIMIT 1";


echo $ins_stmt = "insert into patient(p_id,p_name,p_dob,p_gender,p_address,d_id) 
values ('$p_id','$p_name','$p_dob','$p_gender','$p_address','$d_id')";

$result = mysqli_query($connect,$ins_stmt);

if($result){
   header('location:edit.php');
}


?>
