<?php include "admin_header.php"; ?>
<body>

 <?php include "admin_navigation.php";?>
 <div class='margin'>
  <div class='col-sm-4 mb-5'>
 <?php
    include '../dbcon.php'; 
     $sql ="SELECT `id`, `info`, `description`, `date` FROM `submit_report`"; 
     $result = mysqli_query($con,$sql);
     $run = mysqli_num_rows($result);
     if ($run>0) {
       while($row = mysqli_fetch_assoc($result)){
        
        echo "<div class='card mt-5 mx-5'>
    <div class='card-header'>";
    echo "Request ID: ".$row["id"];
       echo "</div>"; 
  echo "<div class='card-body'>";
   echo"<h5 class='card-title'>Info: ".$row["info"];echo "</h5>";
   echo "<p class='card-text'>Description: ".$row["description"];echo"</p>";
   echo"<p class='card-text'>Date: ".$row["date"];echo"</p>";
   echo"<div class='float-right'>";
   echo"<form action='' method=''>"; 
   echo"<input type='hidden' name='id'value=".$row['id'].">";
    echo "<div class ='float-right'>";
    echo"<input type='submit' class='btn btn-danger mr-3' name='view' value='view'>";
    echo"<input type='submit'class='btn btn-secondary' name='close' value='close'>";
    echo "</div>";
   echo"</form>";
   echo"</div>";
   echo"</div>";
   echo"</div>";

       }
     }
  ?>

  
    

<?php 
  if(isset($_REQUEST['view'])) {
     $qry ="SELECT * FROM `submit_report` WHERE `id`=' {$_REQUEST['id']}'";
     $result = mysqli_query($con,$qry);
     $data = mysqli_fetch_assoc($result);  
     $info = $data['info'];
     $description = $data['description'];
     $name = $data['name'];
     $address1 = $data['address1'];
     $address2 = $data['address2'];
     $city = $data['city'];
     $state = $data['state'];
     $zip= $data['zip'];
     $email = $data['email'];
     $mobile = $data['mobile'];
   }
  if (isset($_REQUEST['close'])) {
    $sql = "DELETE FROM `submit_report` WHERE `id`={$_REQUEST['id']}";
    $result = mysqli_query($con,$sql);
    if ($result== TRUE) {
    echo '<meta http-equiv="refresh" content="0;URL=?closed"/>';
    }else{
      echo "Unable To Delete";
    }
    
  }
  if (isset($_REQUEST['assign'])) {
    if (($_REQUEST['id']=="")||($_POST['info']=="")||($_POST['description']=="")||($_POST['name']=="")||($_POST['address1']=="")||($_POST['address2']=="")||($_POST['city']=="")||($_POST['state']=="")||($_POST['zip']=="")||($_POST['email']=="")||($_POST['mobile']=="")||($_POST['assigntech']=="")||($_POST['date']=="")) {
      ?>
      <script type="text/javascript">
        alert("Fill All Fields!!");
      </script>
      <?php
    }else{
      $sid = $_REQUEST['id'];
      $sinfo = $_REQUEST['info'];
      $sdescription = $_REQUEST['description'];
      $sname = $_REQUEST['name'];
      $saddress1 = $_REQUEST['address1'];
      $saddress2 = $_REQUEST['address2'];
      $scity = $_REQUEST['city'];
      $sstate = $_REQUEST['state'];
      $szip = $_REQUEST['zip'];
      $semail = $_REQUEST['email'];
      $smobile = $_REQUEST['mobile'];
      $sassigntech = $_REQUEST['assigntech'];
      $sdate = $_REQUEST['date'];
      $sql ="INSERT INTO `assign_tech`(`id`, `info`, `description`, `name`, `address1`, `address2`, `city`, `state`, `zip`, `email`, `mobile`, `assigntech`, `date`) VALUES ('$sid','$sinfo','$sdescription','$sname','$saddress1','$address2','$scity','$sstate','$szip','$semail','$smobile','$sassigntech','$sdate')";
      $result = mysqli_query($con,$sql);
      if ($result==TRUE) {
        ?>
      <script>
        alert("Technician Assigned Successfully!!");
      </script>
      <?php
      echo '<meta http-equiv="refresh" content="0;URL=?closed"/>';
      }else{
         ?>
      <script type="text/javascript">
        alert("Not Able to Assign Technician!!");
      </script>
      <?php
      }
    }
  }
?>
</div>
</div>
<div class="margin2">
<div class="col-sm-10 mt-5 jumbotron">
  <!-- Main Content area Start Last -->
  <form action="" method="POST">
    <h5 class="text-center">Assign Work Order Request</h5>
    <div class="form-group">

      <label for="">Request ID</label>
      <input type="text" class="form-control" id="" name="id" value="<?php if(isset($data['id'])) {echo $data['id'];} ?>"readonly>
    </div>
    <div class="form-group">
      <label for="">Request Info</label>
      <input type="text" class="form-control" id="" name="info" value="<?php if(isset($data['info'])) {echo $data['info'];} ?>">
    </div>
    <div class="form-group">
      <label for="">Description</label>
      <input type="text" class="form-control" id="" name="description" value="<?php if(isset($data['description'])) {echo $data['description'];} ?>">
    </div>
    <div class="form-group">
      <label for="">Name</label>
      <input type="text" class="form-control" id="" name="name" value="<?php if(isset($data['name'])) {echo $data['name'];} ?>">
    </div>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="">Address Line 1</label>
        <input type="text" class="form-control" id="" name="address1" value="<?php if(isset($data['address1'])) {echo $data['address1'];} ?>">
      </div>
      <div class="form-group col-md-6">
        <label for="">Address Line 2</label>
        <input type="text" class="form-control" id="" name="address2" value="<?php if(isset($data['address2'])) {echo $data['address2'];} ?>">
      </div>
    </div>
    <div class="form-row">
      <div class="form-group col-md-4">
        <label for="">City</label>
        <input type="text" class="form-control" id="" name="city" value="<?php if(isset($data['city'])) {echo $data['city'];} ?>">
      </div>
      <div class="form-group col-md-4">
        <label for="">State</label>
        <input type="text" class="form-control" id="" name="state" value="<?php if(isset($data['state'])) {echo $data['state'];} ?>">
      </div>
      <div class="form-group col-md-4">
        <label for="">Zip</label>
        <input type="text" class="form-control" id="" name="zip" value="<?php if(isset($data['zip'])) {echo $data['zip'];} ?>">
      </div>
    </div>
    <div class="form-row">
      <div class="form-group col-md-8">
        <label for="">Email</label>
        <input type="email" class="form-control" id="" name="email" value="<?php if(isset($data['email'])) {echo $data['email'];} ?>">
      </div>
      <div class="form-group col-md-4">
        <label for="">Mobile</label>
        <input type="text" class="form-control" id="" name="mobile" value="<?php if(isset($data['mobile'])) {echo $data['mobile'];} ?>">
      </div>
    </div>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="">Assign to Technician</label>
        <input type="text" class="form-control" id="" name="assigntech">
      </div>
      <div class="form-group col-md-6">
        <label for="">Date</label>
        <input type="date" class="form-control" id="" name="date">
      </div>
    </div>
    <div class="float-right">
      <button type="submit" class="btn btn-success" name="assign">Assign</button>
      <button type="reset" class="btn btn-secondary">Reset</button>
    </div>
    
  </form>
 

</div>
</div> 
</body>
</html

