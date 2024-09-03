<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>p_view</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
    <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    
    <script>
       // new DataTable('#table');
       $('table').DataTable();
    </script>
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
</head>
<body>

<style>
    body { 
    font-size: 140%; 
    background: #283c86;  /* fallback for old browsers */
    background: -webkit-linear-gradient(to right, #45a247, #283c86);  /* Chrome 10-25, Safari 5.1-6 */
    background: linear-gradient(to right, #45a247, #283c86); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

  }
  table{
    background-image: transparent;
  }

    h2 {
      text-align: center;
      padding: 20px 0;
    }

    table caption {
      padding: .5em 0;
    }

    table.dataTable th,
    table.dataTable td {
      white-space: nowrap;
    }

    .p {
      text-align: center;
      padding-top: 140px;
      font-size: 14px;
    }
</style>
    

<?php

include 'connection.php';
$query_str = "select * from patient ";
/*$query_str = "select p.*,pdd.patient_disease from patient p left join 
(select pd.patient_id, group_concat(d.disease_name) patient_disease
  from  `patient_diseases` pd, `diseases` d 
where d.disease_id=pd.disease_id group by pd.patient_id) pdd
on p.p_id=pdd.patient_id";
*/
$result = mysqli_query($connect,$query_str);

	echo '<br><br>';
?>
<h2>Patient Details</h2>

    <div class="container">
    <div class="row">
        <div class="col-xs-12">
        <table  style="border:5px ; border-radius:20px;" id="table"  class="table table-striped w-40">
            <thead>
                <tr>
                    <th>p_id</th>
                    <th>p_name</th>                                                                      
                    <th>p_email</th>                                                                      
                    <th>p_dob</th>                                                                      
                    <th>p_gender</th>                                                                      
                    <th>p_phone</th>                                                                      
                    <th>p_address</th>                                                                      
                    <!--th>Diseases</th-->                                                                      
                    <th>Patient Image</th>                                                                      
                    <th>EDIT</th>                                                                      
                    <th>DELETE</th>                                                                      
                                                                                        
                    </tr>
            </thead>
            
<?php

	while($result_array_row = mysqli_fetch_array($result))
	{
    /*
     $sql_p_d = "select group_concat(d.disease_name) patient_disease from 
     `patient_diseases` pd, `diseases` d where d.disease_id=pd.disease_id 
     and pd.patient_id=".$result_array_row['p_id'];
     $p_d_result = mysqli_query($connect,$sql_p_d);
     $p_d_result_array_row = mysqli_fetch_array($p_d_result);*/

        echo "<tr>";
        echo '<td>'.$result_array_row['p_id'].'</td>';
        echo '<td>'.$result_array_row['p_name'].'</td>';
        echo '<td>'.$result_array_row['p_email'].'</td>';
        echo '<td>'.$result_array_row['p_dob'].'</td>';
        echo '<td>'.$result_array_row['p_gender'].'</td>';
        echo '<td>'.$result_array_row['p_phone'].'</td>';
        echo '<td>'.$result_array_row['p_address'].'</td>';
//        echo '<td>'.$result_array_row['patient_disease'].'</td>';

        echo '<td><img src="patient_images/'.$result_array_row['p_image'].'" width="100" height="80"></td>';
        echo '<td><a href="patient_update.php?p_id='.$result_array_row['p_id'].'">edit</a></td>';
        echo '<td><a href="patient_delete.php?p_id='.$result_array_row['p_id'].'">delete</a></td>';
		echo "</tr>";
    }
	?>
    <div style="border:5px ; border-radius:20px;">
        <button class="btn btn-primary" onclick="window.location.href = 'project.php' ">HOME</button>
    </div>
    <br>



</body>
</html>