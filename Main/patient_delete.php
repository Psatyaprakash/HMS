<?php
include 'connection.php';

$p = $_REQUEST['p_id'];

$del_pd = "delete from patient_diseases where patient_id = $p";
$result =mysqli_query($connect,$del_pd);

$del_p = "delete from patient where p_id = $p";
$result_p =mysqli_query($connect,$del_p);


if($result_p ){
    header('location:patient_details_view.php');
 }
?>