<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
</head>
<body>
    


<!--  ************************* Contact Us Starts Here ************************** -->

<?php
            $mode = 'Add';
            if (isset($_REQUEST['p_id'])) {
                if ($_REQUEST['p_id'] > 0 ) {
                    $mode = 'Edit';
                    include 'connection.php';
                    $p_id = $_REQUEST['p_id'];
                    $fetch_data = "select * from patient where p_id=$p_id"  ;
                    $result = mysqli_query($connect,$fetch_data);
                    $row = mysqli_fetch_array($result);
                }
            }
        ?>


    
    <section id="contact_us" class="contact-us-single">
        <div class="row no-margin">

            <div  class="col-sm-12 cop-ck">
            <form action="patient_details.php" method="post" class="container" id="myform">
    <div class="bg-white row">
        <div class=""></div> 
     <!--?php
            if ($mode == 'Add') { 
                echo "<input type=hidden name=mode  value=Add>";
            ?>
    
        <label class="col-4" for="fname">Patient id :</label><br>
        <input class="col-8" placeholder="Frosty" type="text" id="p_id" name="p_id">
        <small id="p_error" class="text-danger">ID cannot be ......</small>
        <br>
        
        else { ?>
            <input type=hidden name="p_id"  value="<?//php echo $row['p_id']; ?>">
            <input type=hidden name="mode"  value="Edit">
            
            ?-->
    </div>

        <div class="mb-2 ">
        <label for="mname" class="form-label" class="col-4">Employee name :</label><br>
        <input class="form-control" class="col-8" placeholder="name" type="text" id="p_name" name="p_name" value="<?php if ($mode=='Edit') echo $row['p_name']?>">
        <small id="p_error" class="text-danger">First letter should be Caps</small><br>
        </div>


       <fieldset>
           <legend>Gender*</legend>
        <select name="p_gender" id="gender" class="form-label">
            <option class="form-control" <?php if (($mode=='Edit') && $row['gender']=='Male') echo 'selected' ;?> value="1" id="Male">Male</option>
            <option class="form-control" <?php if (($mode=='Edit') && $row['gender']=='Female') echo 'selected' ;?>  value="2" id="Female">Female</option>
        </select>
        </fieldset>
    
    <p>
        DATE OF BIRTH :*<input placeholder="dd/mm/yyyy" type="date" name="p_dob" id="p_dob" value="<?php if ($mode=='Edit') echo $row['p_dob']?>" required>
    </p>
    
    <div class="row">
        <div class="col-4">Address</div>
        <div class="col-8"><textarea name="p_address" id="p_address" cols="3" rows="1" class="w-100"></textarea></div>
        </div>

<!--
    <div class="container" id="disease" name="disease">
    <input type="checkbox"  id="d1" name="d1">
    <label for="d1" value="1">d1</label>
    
    <input type="checkbox"  id="d2" name="d2">
    <label for="d2" value="2">d2</label>
    
    <input type="checkbox"  id="d3" name="d3">
    <label for="d3" value="3">d3</label>
    </div>
        -->
    <div>
    <label class="col-4" for="doc">Doctor id :</label><br>
        <input class="col-8" placeholder="Doctor" type="text" id="d_id" name="d_id">
    </div>
    
    <!--
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
        -->

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
    </section>
    

    
</body>
</html>