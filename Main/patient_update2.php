<?php
include 'connection.php';

print_r($_REQUEST);
echo '<pre>';

$p_id = $_REQUEST['new_id'];
$p_name = $_REQUEST['p_name'];
$p_email = $_REQUEST['p_email'];
$p_dob = $_REQUEST['p_dob'];
$p_gender = $_REQUEST['p_gender'];
$p_phone = $_REQUEST['p_phone'];
$p_address = $_REQUEST['p_address'];

//$message = $_REQUEST['message'];




$updt_stmt = "UPDATE  patient SET
p_name = '$p_name',
p_email = '$p_email',
p_dob = '$p_dob',
p_gender = '$p_gender',
p_phone = '$p_phone',
p_address = '$p_address'

 WHERE p_id = $p_id ";

$result = mysqli_query($connect,$updt_stmt);

$del = "DELETE  FROM patient_diseases WHERE patient_id = $p_id";
$res = mysqli_query($connect,$del);

$disease_array = $_REQUEST['diseases']; // array
foreach($disease_array as $values){
   $sql = "INSERT INTO patient_diseases VALUES (null,$p_id,$values)";
  mysqli_query($connect,$sql);

}

if($result){
   header('location:patient_details_view.php');
}

?>