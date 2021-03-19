<?php include "admin_header.php"; ?>
<body>

 <?php include "admin_navigation.php";?>
<div class="margin1">

<div class="col-sm-6 mt-5  mx-3 jumbotron">
  <h3 class="text-center">Add New Product</h3>
  <?php
  if (isset($_REQUEST['addproduct'])) {
     if (($_REQUEST['rname']=="")||($_REQUEST['rdate']=="")||($_REQUEST['ravailable']=="")||($_REQUEST['rtotal']=="")||($_REQUEST['rcost']=="")||($_REQUEST['rsell']=="")) {
       ?>
       <script>
         alert('Fill All Fields First!!');
       </script>
       <?php
       }else{
        $rname = $_REQUEST['rname'];
        $rdate = $_REQUEST['rdate'];
        $ravailable = $_REQUEST['ravailable'];
        $rtotal = $_REQUEST['rtotal'];
        $rcost = $_REQUEST['rcost'];
        $rsell = $_REQUEST['rsell'];
        $sql ="INSERT INTO `assets`( `name`, `date_purchase`, `prod_available`, `prod_total`, `cost_price`, `selling_price`) VALUES ('$rname','$rdate','$ravailable','$rtotal','$rcost',$rsell)";
      $result = mysqli_query($con,$sql);
         if ($result==TRUE) {
        ?>
       <script>
         alert('Product Added Successfully!!');
       </script>
       <?php
       echo '<meta http-equiv="refresh" content="0;URL=?closed"/>';
          }else{
        ?>
       <script>
         alert('Product Cannot be Added !!');
       </script>
       <?php
       echo '<meta http-equiv="refresh" content="0;URL=?closed"/>';
      }
     }
   } 
  
  ?>
  <form action="" method="POST">
    <div class="form-group">
      <label for="rname">Product Name</label>
      <input type="text" class="form-control" id="" name="rname" value="">
    </div>
    <div class="form-group">
      <label for="rdate">Date of Purchase</label>
      <input type="Date" class="form-control" id="" name="rdate" value="">
    </div>
    <div class="form-group">
      <label for="ravailable">Available</label>
      <input type="text" class="form-control" id="" name="ravailable" value="">
    </div>
    <div class="form-group">
      <label for="rtotal">Total</label>
      <input type="text" class="form-control" id="" name="rtotal" value="">
    </div>
    <div class="form-group">
      <label for="rcost">Original Cost Each</label>
      <input type="text" class="form-control" id="empEmail" name="rcost" value="">
    </div>
    <div class="form-group">
      <label for="rsell">Selling Cost Each</label>
      <input type="text" class="form-control" id="empEmail" name="rsell" value="">
    </div>
    <div class="text-center">
      <button type="submit" class="btn btn-danger" id="" name="addproduct">Update</button>
      <a href="technician.php" class="btn btn-secondary">Close</a>
    </div>
  </form>
</div>
</div>
</body>
</html>
