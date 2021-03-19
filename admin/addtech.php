 <?php include "admin_header.php"; ?>
<body>

 <?php include "admin_navigation.php";?>
<div class="margin1">

<div class="col-sm-6 mt-5  mx-3 jumbotron">
  <h3 class="text-center">Add New Technician </h3>
  <?php
  if (isset($_REQUEST['addtech'])) {
     if (($_REQUEST['rname']=="")||($_REQUEST['rpassword']=="")||($_REQUEST['rcity']=="")||($_REQUEST['rmobile']=="")||($_REQUEST['remail']=="")) {
       ?>
       <script>
         alert('Fill All Fields First!!');
       </script>
       <?php
       }else{
      $rname = $_REQUEST['rname'];
      $rpassword = $_REQUEST['rpassword'];
      $rcity = $_REQUEST['rcity'];
      $rphone = $_REQUEST['rmobile'];
      $remail = $_REQUEST['remail'];
      $qry ="SELECT * FROM `technician` WHERE `email`='$remail'";
      $result = mysqli_query($con,$qry);
       if ($result->num_rows>0) {
        ?>
       <script>
         alert('Email Already Exists!!');
       </script>
       <?php
        }else{
        $sql ="INSERT INTO `technician`( `name`, `password`,city,`mobile`, `email`) VALUES ('$rname','$rpassword','$rcity','$rphone','$remail')";
      $result = mysqli_query($con,$sql);
         if ($result==TRUE) {
        ?>
       <script>
         alert('Technician Added Successfully!!');
       </script>
       <?php
          }else{
        ?>
       <script>
         alert('Technician Cannot be Added !!');
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
      <input type="text" class="form-control" id="" name="rname" value="">
    </div>
    <div class="form-group">
      <label for="rpassword">Password</label>
      <input type="password" class="form-control" id="" name="rpassword" value="">
    </div>
    <div class="form-group">
      <label for="rcity">City</label>
      <input type="text" class="form-control" id="" name="rcity" value="">
    </div>
    <div class="form-group">
      <label for="rmobile">Mobile</label>
      <input type="text" class="form-control" id="" name="rmobile" value="">
    </div>
    <div class="form-group">
      <label for="remail">Email</label>
      <input type="email" class="form-control" id="empEmail" name="remail" value="">
    </div>
    <div class="text-center">
      <button type="submit" class="btn btn-danger" id="" name="addtech">Update</button>
      <a href="technician.php" class="btn btn-secondary">Close</a>
    </div>
  </form>
</div>
</div>
</body>
</html>
