<?php include "admin_header.php"; ?>
<body>

 <?php include "admin_navigation.php";?>
<div class="margin1">

<div class="col-sm-6 mt-5  mx-3 jumbotron">
  <h3 class="text-center">Add New Requester</h3>
  <?php
  if (isset($_REQUEST['addreq'])) {
     if (($_REQUEST['rname']=="")||($_REQUEST['password']=="")||($_REQUEST['mobile']=="")||($_REQUEST['email']=="")) {
       ?>
       <script>
         alert('Fill All Fields First!!');
       </script>
       <?php
       }else{
      $rname = $_REQUEST['rname'];
      $rpassword = $_REQUEST['password'];
      $rphone = $_REQUEST['mobile'];
      $remail = $_REQUEST['email'];
      $qry ="SELECT * FROM `userregistration` WHERE `email`='$remail'";
      $result = mysqli_query($con,$qry);
       if ($result->num_rows>0) {
        ?>
       <script>
         alert('Email Already Exists!!');
       </script>
       <?php
        }else{
        $sql ="INSERT INTO `userregistration`( `name`, `password`,conpassword, `phone`, `email`) VALUES ('$rname','$rpassword','$rpassword','$rphone','$remail')";
      $result = mysqli_query($con,$sql);
         if ($result==TRUE) {
        ?>
       <script>
         alert('Requester Added Successfully!!');
       </script>
       <?php
          }else{
        ?>
       <script>
         alert('Requester Cannot be Added !!');
       </script>
       <?php
      }
     }
   } 
 }
  ?>
      











      
  <form action="" method="POST">
    
    <div class="form-group">
      <label for="rname">Name</label>
      <input type="text" class="form-control" id="rname" name="rname" value="">
    </div>
    <div class="form-group">
      <label for="password">Password</label>
      <input type="password" class="form-control" id="" name="password" value="">
    </div>
    
    <div class="form-group">
      <label for="mobile">Mobile</label>
      <input type="text" class="form-control" id="" name="mobile" value="  ">
    </div>
    <div class="form-group">
      <label for="email">Email</label>
      <input type="text" class="form-control" id="" name="email" value=" ">
    </div>

    <div class="text-center">
      <button type="submit" class="btn btn-danger" id="addreq" name="addreq">Update</button>
      <a href="requester.php" class="btn btn-secondary">Close</a>
    </div>
  </form>
</div>
</div>
</body>
</html>
