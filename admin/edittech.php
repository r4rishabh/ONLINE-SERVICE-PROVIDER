 <?php include "admin_header.php"; ?>
<body>

 <?php include "admin_navigation.php";?>
<div class="margin1">

<div class="col-sm-6 mt-5  mx-3 jumbotron">
  <h3 class="text-center">Update Technician Details</h3>
  <?php
  if (isset($_REQUEST['edit'])) {
      $sql ="SELECT * FROM `technician` WHERE `id`={$_REQUEST['id']}";
    $result = mysqli_query($con,$sql);
    $row = mysqli_fetch_assoc($result);
       }
      if (isset($_REQUEST['update'])) {
      if (($_REQUEST['db_id']=="")||($_REQUEST['db_name']=="")||($_REQUEST['db_city']=="")||($_REQUEST['db_mobile']=="")||($_REQUEST['db_email']=="")) {
        ?>
        <script>
          alert('Fill All Fields!!!');
        </script>
        <?php
      }else{
        $rid = $_REQUEST['db_id'];
        $rname = $_REQUEST['db_name'];
        $rcity = $_REQUEST['db_city'];
        $rmobile = $_REQUEST['db_mobile'];
        $remail = $_REQUEST['db_email'];
       $sql = "UPDATE `technician` SET id ='$rid' ,name = '$rname',city= '$rcity',mobile='$rmobile',email ='$remail' WHERE id= '$rid'";
       $result =mysqli_query($con,$sql);
       if ($result==TRUE) {
         ?>
        <script>
          alert('Data Updated Successfully!!!');
        </script>
        <?php
       }else{
        ?>
        <script>
          alert('Unable To Update!!!');
        </script>
        <?php
      }
     } 
   } 
  ?>
  <form action="" method="">
    <div class="form-group">
      <label for="db_id">Emp ID</label>
      <input type="text" class="form-control" id="" name="db_id" value="<?php 
      if(isset($row['id'])){
        echo $row['id'];
      }?>" readonly>
    </div>
    <div class="form-group">
      <label for="db_name">Name</label>
      <input type="text" class="form-control" id="" name="db_name" value="<?php 
      if(isset($row['name'])){
        echo $row['name'];
      }?>">
    </div>
    <div class="form-group">
      <label for="db_city">City</label>
      <input type="text" class="form-control" id="" name="db_city" value="<?php 
      if(isset($row['city'])){
        echo $row['city'];
      }?>">
    </div>
    <div class="form-group">
      <label for="db_mobile">Mobile</label>
      <input type="text" class="form-control" id="" name="db_mobile" value="<?php 
      if(isset($row['mobile'])){
        echo $row['mobile'];
      }?>">
    </div>
    <div class="form-group">
      <label for="db_email">Email</label>
      <input type="email" class="form-control" id="empEmail" name="db_email" value="
      <?php 
      if(isset($row['email'])){
        echo $row['email'];
      }?>">
    </div>
    <div class="text-center">
      <button type="submit" class="btn btn-danger" id="" name="update">Update</button>
      <a href="technician.php" class="btn btn-secondary">Close</a>
    </div>
  </form>
</div>
</div>
</body>
</html>
