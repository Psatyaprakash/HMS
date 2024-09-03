<?php
include 'connection.php';
echo '<pre>';
print_r($_REQUEST);

$d_id = $_REQUEST['new_id'];
$firstname =addslashes( $_REQUEST['firstname']);
$lastname = $_REQUEST['lastname'];
$email = $_REQUEST['email'];
$mobile = $_REQUEST['mobile'];
$gender = $_REQUEST['gender'];
$dob = $_REQUEST['dob'];
$address = $_REQUEST['address'];
//$d_password = $_REQUEST['d_password'];


$updt_stmt = "UPDATE  doctor SET
firstname = '$firstname',
lastname = '$lastname',
dob = '$dob',
gender = '$gender',
mobile = '$mobile',
address = '$address' WHERE d_id = $d_id ";

$result = mysqli_query($connect,$updt_stmt);
if($result){
    header('location:doctor_details_view.php');
 }
?>