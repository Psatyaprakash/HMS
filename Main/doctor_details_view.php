<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor details</title>

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
$query_str = "select * from doctor";

$result = mysqli_query($connect,$query_str);

	echo '<br><br>';
?>
<h2>Doctor Details</h2>

    <div class="container">
    <div class="row">
        <div class="col-xs-12">
        <table  border=5px id="table"  class="table table-striped w-40">
            <thead>
                <tr>
                    <th>d_id</th>                                                                      
                    <th>firstname</th>                                                                      
                    <th>lastname</th>                                                                      
                    <th>email</th>                                                                      
                    <th>mobile</th>                                                                      
                    <th>gender</th>                                                                      
                    <th>dob</th>                                                                      
                    <th>address</th>                                                                      
                    <th>image</th>                                                                                                               
                    <th>edit</th>                                                                   
                    <th>delete</th>                                                                      
                                                                                  
                </tr>
            </thead>
            
<?php

	while($result_array_row = mysqli_fetch_array($result))
	{
        echo "<tr>";
        echo '<td>'.$result_array_row['d_id'].'</td>';
        echo '<td>'.$result_array_row['firstname'].'</td>';
        echo '<td>'.$result_array_row['lastname'].'</td>';
        echo '<td>'.$result_array_row['email'].'</td>';
        echo '<td>'.$result_array_row['mobile'].'</td>';
        echo '<td>'.$result_array_row['gender'].'</td>';
        echo '<td>'.$result_array_row['dob'].'</td>';
        echo '<td>'.$result_array_row['address'].'</td>';
       //echo '<td>'.$result_array_row['city'].'</td>';
       //echo '<td>'.$result_array_row['pin'].'</td>';
       //echo '<td>'.$result_array_row['state'].'</td>';
       //echo '<td>'.$result_array_row['qualification'].'</td>';
       //echo '<td>'.$result_array_row['disease'].'</td>';
       echo '<td><img src="doctor_images/'.$result_array_row['d_image'].'" width="100" height="80"></td>';
        echo '<td><a href="doctor_edit.php?d_id='.$result_array_row['d_id'].'">edit</a></td>';
        echo '<td><a href="doctor_delete.php?d_id='.$result_array_row['d_id'].'">delete</a></td>';
		echo "</tr>";
    }
	?>
    <div style="border:5px ; border-radius:20px;">
        <button class="btn btn-primary" onclick="window.location.href = 'project.php' ">HOME</button>
    </div>
    <br>



</body>
</html>