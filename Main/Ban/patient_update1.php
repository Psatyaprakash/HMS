<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/fontawsom-all.min.css">
     <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />

</head>
<body>
<style>
        body {
        margin: 0px;
        background: #eaeaea;  
        font-family: 'Open Sans', sans-serif;
      }

      .info p {
        text-align:center;
        color: #999;
        text-transform:none;
        font-weight:600;
        font-size:15px;
        margin-top:2px
      }

      .info i {
        color:#F6AA93;
      }
      form h1 {
        font-size: 18px;
        background: #F6AA93 none repeat scroll 0% 0%;
        color: rgb(255, 255, 255);
        padding: 22px 25px;
        border-radius: 15px 15px 0px 0px;
        margin: auto;
        text-shadow: none; 
        text-align:center;
      }

      form {
        border-radius: 15px;
        max-width:700px;
        width:100%;
        margin: 5% auto;
        background-color: #FFFFFF;
        overflow: hidden;
      }

      p span {
        color: #F00;
      }

      p {
        margin: 0px;
        font-weight: 500;
        line-height: 2;
        color:#333;
      }

      h1 {
        text-align:center; 
        color: #666;
        text-shadow: 1px 1px 0px #FFF;
        margin:50px 0px 0px 0px
      }

      input {
        border-radius: 0px 5px 5px 0px;
        border: 1px solid #eee;
        margin-bottom: 15px;
        width: 75%;
        height: 40px;
        float: left;
        padding: 0px 15px;
      }

      a {
        text-decoration:inherit
      }

      textarea {
        border-radius: 0px 5px 5px 0px;
        border: 1px solid #EEE;
        margin: 0;
        width: 75%;
        height: 6%; 
        float: left;
        padding: 0px 15px;
      }

      .form-group {
        overflow: hidden;
        clear: both;
      }

      .icon-case {
        width: 35px;
        float: left;
        border-radius: 5px 0px 0px 5px;
        background:#eeeeee;
        height:42px;
        position: relative;
        text-align: center;
        line-height:40px;
        margin-top: 2px;
      }

      i {
        color:#555;
      }

      .contentform {
          padding: 10px 10px;
      }

      .bouton-contact{
        background-color: #81BDA4;
        color: #FFF;
        text-align: center;
        width: 100%;
        border:0;
        padding: 17px 25px;
        border-radius: 0px 0px 15px 15px;
        cursor: pointer;
        margin-top: 4px;
        font-size: 18px;
      }

      .leftcontact {
        width:49.5%; 
        float:left;
        border-right: 1px dotted #CCC;
        box-sizing: border-box;
        padding: 0px 15px 0px 0px;
      }

      .rightcontact {
        width:49.5%;
        float:right;
        box-sizing: border-box;
        padding: 0px 0px 0px 15px;
      }

      .validation {
        display:none;
        margin: 0 0 10px;
        font-weight:400;
        font-size:13px;
        color: #DE5959;
      }

      #sendmessage {
        border:1px solid #fff;
        display:none;
        text-align:center;
        margin:10px 0;
        font-weight:600;
        margin-bottom:30px;
        background-color: #EBF6E0;
        color: #5F9025;
        border: 1px solid #B3DC82;
        padding: 13px 40px 13px 18px;
        border-radius: 3px;
        box-shadow: 0px 1px 1px 0px rgba(0, 0, 0, 0.03);
      }

      #sendmessage.show,.show  {
        display:block;
      }
</style>
<?php
              include 'connection.php';
              $p_id = $_REQUEST['p_id'];
                $sql = "select * from patient  where p_id = $p_id";
                $result = mysqli_query($connect,$sql);
                $result_array_row = mysqli_fetch_array($result);

                $child = "select * from patient_diseases where patient_id = $p_id";
                $child_array= mysqli_query($connect,$child);
                $p_d_array = array();
                while ( $child_result_row = mysqli_fetch_array($child_array)) {
                    $p_d_array[]= $child_result_row['disease_id'];
                };

                ?>

    <div class="container-fluid"> 
      <form action="update2.php" method="post">
              <h1>Patient details</h1>
              
            <div class="contentform">
              <div id="sendmessage"> Your message has been sent successfully. Thank you. </div>

        
              <div class="leftcontact">
              <label for="fname">Patient id :</label><br>
            <input placeholder="Frosty" type="text" id="fname" name="new_p_id" value=<?php echo $result_array_row['p_id']; ?>></br>

                    <div class="form-group">
                      <p>Name<span>*</span></p>
                      <span class="icon-case"><i class="fa fa-male"></i></span>
                        <input type="text" name="p_name" id="p_name" data-rule="required" value="<?php echo $result_array_row['p_name']; ?>"/>
                        <div class="validation"></div>
               </div> 
        
            
        
              <div class="form-group">
              <p>E-mail <span>*</span></p>  
              <span class="icon-case"><i class="fa fa-envelope-o"></i></span>
                        <input type="email" name="p_email" id="p_email" data-rule="email" value="<?php echo $result_array_row['p_email']; ?>"/>
                        <div class="validation"></div>
              </div>  
        
              <div class="form-group">
              <fieldset>
           <legend>Gender<span>*</span></legend>
        <select name="p_gender" id="p_gender"  class="form-label">
            <option class="form-control" id="Male" <?php if ($result_array_row['p_gender']=='male') echo ' selected '; ?> value="male">Male</option>
            <option class="form-control"  id="Female" <?php if ($result_array_row['p_gender']=='female') echo ' selected '; ?> value="female">Female</option>
            <div class="validation"></div>
              </div>
        </select>
        </fieldset>
</div>
    
    <p>
        DATE OF BIRTH :<span>*</span><input placeholder="dd/mm/yyyy" type="date" name="p_dob" id="date" value="<?php echo $result_array_row['p_dob']; ?>" required>
    </p>
    
           <div class="validation"></div>
              </div>

             

              
        
             <!-- Right contact -->
        
          </div>
        
          <div class="rightcontact">  
        
          <div class="form-group">
              <p>Phone number <span>*</span></p>  
              <span class="icon-case"><i class="fa fa-phone"></i></span>
                <input type="text" name="p_phone" id="p_phone" data-rule="maxlen:10" value="<?php echo $result_array_row['p_phone']; ?>"/>
                        <div class="validation"></div>
              </div>
        
              
              <div class="form-group">
              <p>Address <span>*</span></p>
              <span class="icon-case"><i class="fa fa-info"></i></span>
                        <input type="text" name="p_address" id="p_address" value="<?php echo $result_array_row['p_address']; ?>"/>
                        <div class="validation"></div>
              </div>
        
              <div class="form-group">
              <p>Disease <span>*</span></p> 
              <!--span class="icon-case"><i class="fa fa-comment-o"></i></span-->
                <div class="row">

                <?php 
                 $sql_stmt = "SELECT * FROM `diseases`";
                 $result = mysqli_query($connect,$sql_stmt);
                 while ($row=mysqli_fetch_array($result)) {
             ?>
                                <input style="background-color:#e6ffff" type="checkbox" name="diseases[]" 
                                <?php
                                    if (count($p_d_array)>0 ){
                                        if(in_array($row['disease_id'],$p_d_array)) {
                                            echo ' checked ';
                                        }

                                    }
                                ?>
                                value="<?php echo $row['disease_id']; ?>"/>  
                                <label><?php echo $row['disease_name']; ?></label><br>
                                <?php            
                                    }
                                ?>
                        
                </div>
              </div>
              <div>
                <img src="patient_images/<?php echo $result_array_row['p_image']; ?>" alt="">
              </div>
            
              <div class="form-group">
              <!--p>Message <span>*</span></p>
              <span class="icon-case"><i class="fa fa-comments-o"></i></span>
                        <textarea name="message" rows="14" data-rule="required" value="<?php echo $result_array_row['message']; ?>"></textarea>
                        <div class="validation"></div>
              </div-->  
          </div>
          </div>
        <button type="submit" class="bouton-contact">Send</button>
          
        </form> 
        
          
       </div>
</body>
</html>






<?php
//        $query_str = "select * from patient  where p_id = $p_id";
  //      $result = mysqli_query($connect,$query_str);
    //    $result_array_row = mysqli_fetch_array($result);

        ?>
