<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

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
$query_str = "select * from patient";

$result = mysqli_query($connect,$query_str);

	echo '<br><br>';
?>
<h2>Patient Details Update  </h2>

    <div class="container">
    <div class="row">
        <div class="col-xs-12">
        <table  border=5px id="table"  class="table table-striped w-40">
            <thead>
                <tr>
                    <th>p_id</th>                                                                      
                    <th>p_name</th>                                                                      
                    <th>p_dob</th>                                                                      
                    <th>p_gender</th>                                                                      
                    <th>address</th>                                                                      
                    <!--th>disease</th-->                                                                      
                    <!--th>d_id</th-->                                                                                                                    
                    <th>Edit</th>                                                                      
                    <th>Delete</th>                                                                      
                </tr>
            </thead>
            
<?php

	while($result_array_row = mysqli_fetch_array($result))
	{
        echo "<tr>";
        echo '<td>'.$result_array_row['p_id'].'</td>';
        echo '<td>'.$result_array_row['p_name'].'</td>';
        echo '<td>'.$result_array_row['p_dob'].'</td>';
        echo '<td>'.$result_array_row['p_gender'].'</td>';
        echo '<td>'.$result_array_row['p_address'].'</td>';
        //echo '<td>'.$result_array_row['disease'].'</td>';
        //echo '<td>'.$result_array_row['d_id'].'</td>';
        echo '<td><a href="patient_update.php?p_id='.$result_array_row['p_id'].'">edit</a></td>';
        echo '<td><a href="delete.php?p_id='.$result_array_row['p_id'].'">delete</a></td>';
		echo "</tr>";
    }
	?>
    <div border=5; border-radius=20px>
        <a href="project.php">PROJECT</a>
    </div>



</body>
</html>