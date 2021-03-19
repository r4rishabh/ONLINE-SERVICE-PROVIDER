<?php include "admin_header.php"; ?>
<body>

 <?php include "admin_navigation.php";?>
<div class="margin1">

<div class="col-sm-6 mt-5  mx-3 jumbotron">
  <h3 class="text-center">Update Requester Details</h3>
  <?php
  if (isset($_REQUEST['edit'])) {
    $sql ="SELECT * FROM `userregistration` WHERE `id`={$_REQUEST['id']}";
    $result = mysqli_query($con,$sql);
    $row = mysqli_fetch_assoc($result);
       }
       if (isset($_REQUEST['update'])) {
      if (($_REQUEST['db_id']=="")||($_REQUEST['db_name']=="")||($_REQUEST['db_email']=="")) {
        ?>
        <script>
          alert('Fill All Fields!!!');
        </script>
        <?php
      }else{
        $rid = $_REQUEST['db_id'];
        $rname = $_REQUEST['db_name'];
        $remail = $_REQUEST['db_email'];
       $sql = "UPDATE `userregistration` SET id ='$rid' ,name = '$rname',email ='$remail' WHERE id= '$rid'";
       $result =mysqli_query($con,$sql);
       if ($result==TRUE) {
         ?>
        <script>
          alert('Data Updated Successfully!!!');
        </script>
        <?php
        echo '<meta http-equiv="refresh" content="0;URL=?closed"/>';
       }else{
        ?>
        <script>
          alert('Unable To Update!!!');
        </script>
        <?php
        echo '<meta http-equiv="refresh" content="0;URL=?closed"/>';
      }
     } 
  }
  ?>
  <form action="" method="POST">
    <div class="form-group">
      <label for="db_id">Requester ID</label>
      <input type="text" class="form-control" id="db_id" name="db_id" value="<?php 
      if(isset($row['id'])){
        echo $row['id'];
      }?>" readonly>
    </div>
    <div class="form-group">
      <label for="db_name">Name</label>
      <input type="text" class="form-control" id="db_name" name="db_name" value="<?php 
      if(isset($row['name'])){
        echo $row['name'];
      }?>">
    </div>
    <div class="form-group">
      <label for="db_email">Email</label>
      <input type="text" class="form-control" id="db_email" name="db_email" value="<?php 
      if(isset($row['email'])){
        echo $row['email'];
      }?>">
    </div>
    

    <div class="text-center">
      <button type="submit" class="btn btn-danger" id="update" name="update">Update</button>
      <a href="requester.php" class="btn btn-secondary">Close</a>
    </div>
  </form>
</div>
</div>
</body>
</html>
