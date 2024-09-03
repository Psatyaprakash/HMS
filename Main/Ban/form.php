<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="stylesheet" href="form.css">
    <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    
    <script src="js/form_script.js"></script>
    
</head>
<body>
    <div class="row">
        <div class="col-3"></div>
    <div class="col-6 container m-1 p-5 bg-success ">
    <h1 style="text-align: center;">This is a User form</h1>
    <hr>
    <h1 style="text-align: center;"><b>User Information</b> </h1>

    <?php
            $mode = 'Add';
            if (isset($_REQUEST['emp_id'])) {
                if ($_REQUEST['emp_id'] > 0 ) {
                    $mode = 'Edit';
                    include 'connection_f.php';
                    $emp_id = $_REQUEST['emp_id'];
                    $fetch_data = "select * from silicon where emp_id=$emp_id"  ;
                    $result = mysqli_query($connection_f,$fetch_data);
                    $row = mysqli_fetch_array($result);
                }
            }
        ?>
        <div class="">
            <div class=" ">
    <form name="myform" onsubmit="return validateform()" action="form_insert.php" method="post" class="container" id="myform">
    <div class="bg-white row">
        <div class=""></div> 
     <?php
            if ($mode == 'Add') { 
                echo "<input type=hidden name=mode  value=Add>";
            ?>
    
        <label class="col-4" for="fname">Employee id :</label><br>
        <input class="col-8" placeholder="Frosty" type="text" id="emp_id" name="emp_id">
        <small id="emp_error" class="text-danger"></small>
        <br>
       <?php
        } 
        else { ?>
            <input type=hidden name="emp_id"  value="<?php echo $row['emp_id']; ?>">
            <input type=hidden name="mode"  value="Edit">
            <?php
            }
            ?>
            <script>
                function validateform() {
                    var x = document.forms["myForm"]["emp_id"].value;
                    var y = document.forms["myForm"]["emp_name"].value;
                    if (emp_id < 100 || emp_name.length < 3){  
                        alert("Name can't be blank");  
  return false;  
}else if(emp_name.length>6){  
  alert("Password must be at most 6 characters long.");  
  return false;  
  }  
                    
                }
            </script>
    </div>

        <div class="mb-2 ">
        <label for="mname" class="form-label" class="col-4">Employee name :</label><br>
        <input class="form-control" class="col-8" placeholder="name" type="text" id="emp_name" name="emp_name" value="<?php if ($mode=='Edit') echo $row['emp_name']?>">
        <small id="emp_error" class="text-danger">First letter should be Caps</small><br>
        </div>


       <fieldset>
           <legend>Gender*</legend>
        <select name="emp_gender" id="gender" class="form-label">
            <option class="form-control" <?php if (($mode=='Edit') && $row['gender']=='Male') echo 'selected' ;?> value="1" id="Male">Male</option>
            <option class="form-control" <?php if (($mode=='Edit') && $row['gender']=='Female') echo 'selected' ;?>  value="2" id="Female">Female</option>
        </select>
        </fieldset>
    
    <p>
        DATE OF BIRTH :*<input placeholder="dd/mm/yyyy" type="date" name="emp_dob" id="date" value="<?php if ($mode=='Edit') echo $row['emp_dob']?>" required>
    </p>
    
    
    
    <input type="checkbox" name="cars" id="volvo" value="Volvo">volvo
    <input type="checkbox" name="cars" id="audi" value="Audi">audi
    <input type="checkbox" name="cars" id="maruti" value="Maruti">maruti
    <br>
    <input type="radio" name="brand" id="sams" value="Sams">samsung
    <input type="radio" name="brand" id="appl" value="Appl">apple
    <input type="radio" name="brand" id="xiom" value="Xiomi">xiomi
    <br>
    <input type="button" name="color" id="red" value="red">red
    <input type="button" name="color" id="blue" value="blue">blue
    <input type="button" name="color" id="green" value="green">green
    <br>
    <input type="checkbox" name="fruit" id="orange" value="orange">orange
    <input type="checkbox" name="fruit" id="banana" value="banana">banana
    <input type="checkbox" name="fruit" id="mango" value="mango">mango


    <p>
        
        <input class="x x-slide" type="submit" value="submit">
        <?php
        /*
        if(value=submit){
         header('location:edit.php');
        }
        */?>
    <div>
        <h3><a href="edit.php">Show data</a></h3>
    </div>
    </p>
    </h3>
    
    </form>
    </div>
</div>
</div>
</body>
</html>