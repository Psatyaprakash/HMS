<?php
include 'connection.php';

$d = $_REQUEST['d_id'];

//$del_pd = "delete from patient_diseases where patient_id = $p";
//$result =mysqli_query($connect,$del_pd);

$del_d = "delete from doctor where d_id = $d";
$result_d =mysqli_query($connect,$del_d);


if($result_d ){
    header('location:doctor_details_view.php');
 }
?>