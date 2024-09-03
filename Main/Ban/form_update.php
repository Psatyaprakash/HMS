
<?php
include 'connection_f.php';

$emp_id = $_REQUEST['new_emp_id'];
$emp_name = $_REQUEST['new_emp_name'];
$emp_gender = $_REQUEST['emp_gender'];
$emp_dob = $_REQUEST['emp_dob'];

$updt_stmt = "UPDATE `silicon` SET emp_name=$emp_id, emp_name='$emp_name', emp_gender=$emp_gender, emp_dob='$emp_dob' where emp_id=$emp_id";

$result = mysqli_query($connection_f, $updt_stmt);

if($result){
   header('location:edit.php');
}
?>