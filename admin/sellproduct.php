 <?php include "admin_header.php"; ?>
<body>

 <?php include "admin_navigation.php";?>
<div class="margin1">
<div class="col-sm-6 mt-5  mx-3 jumbotron">
  <h3 class="text-center">Customer Bill</h3>
  <?php
  if (isset($_REQUEST['sellproduct'])) {
     $sql="select * from assets where id={$_REQUEST['id']}";
     $result = mysqli_query($con,$sql);
     $row =mysqli_fetch_assoc($result);
   } 
   if (isset($_REQUEST['csubmit'])) {
     if(($_REQUEST['pid']=="")||($_REQUEST['cname']=="")||($_REQUEST['caddress']=="")||($_REQUEST['pname']=="")||($_REQUEST['pavailable']=="")||($_REQUEST['pquantity']=="")||($_REQUEST['pcost']=="")||($_REQUEST['ptotal']=="")||($_REQUEST['date']=="")){
      ?>
       <script>
         alert('Fill All Fields First!!');
       </script>
       <?php
     }else{
      $pid = $_REQUEST['pid'];
      $cname = $_REQUEST['cname'];
      $caddress = $_REQUEST['caddress'];
      $pname = $_REQUEST['pname'];
      $pavailable = $_REQUEST['pavailable'];
      $pquantity = $_REQUEST['pquantity'];
      $pcost= $_REQUEST['pcost'];
      $ptotal = $_REQUEST['ptotal'];
      $date = $_REQUEST['date'];
      $sql="INSERT INTO `customer_bill`(`id`, `customer_name`, `customer_address`, `prod_name`, `prod_available`, `prod_quantity`, `each_price`, `total_price`, `date`) VALUES ('$pid','$cname','$caddress','$pname','$pavailable','$pquantity','$pcost','$ptotal','$date')";
      $result = mysqli_query($con,$sql);
         if ($result==TRUE) {
        ?>
       <script>
         alert('customer Bill Added Successfully!!');
       </script>
       <?php
       echo '<meta http-equiv="refresh" content="0;URL=?closed"/>';
          }else{
        ?>
       <script>
         alert('Customer Bill Cannot be Added !!');
       </script>
       <?php
       echo '<meta http-equiv="refresh" content="0;URL=?closed"/>';
      }
     }
     }
   

  ?>
  
  <form action="" method="POST">
    <div class="form-group">
      <label for="pid">Product ID</label>
      <input type="text" class="form-control" id="" name="pid" value="<?php 
      if(isset($row['id'])){
        echo $row['id'];
      }?>" readonly>
    </div>
    <div class="form-group">
      <label for="cname">Customer Name</label>
      <input type="text" class="form-control" id="" name="cname">
    </div>
    <div class="form-group">
      <label for="caddress">Customer Address</label>
      <input type="text" class="form-control" id="" name="caddress">
    </div>
    <div class="form-group">
      <label for="pname">Product Name</label>
      <input type="text" class="form-control" id="" name="pname" value="<?php 
      if(isset($row['name'])){
        echo $row['name'];
      }?>" readonly>
    </div>
    <div class="form-group">
      <label for="pavailable">Available</label>
      <input type="text" class="form-control" id="" name="pavailable" value="<?php 
      if(isset($row['prod_available'])){
        echo $row['prod_available'];
      }?>" readonly>
    </div>
    <div class="form-group">
      <label for="pquantity">Quantity</label>
      <input type="text" class="form-control" id="" name="pquantity">
    </div>
    <div class="form-group">
      <label for="pcost">Price Each</label>
      <input type="text" class="form-control" id="" name="pcost" value="<?php 
      if(isset($row['selling_price'])){
        echo $row['selling_price'];
      }?>" readonly>
    </div>
    <div class="form-group">
      <label for="ptotal">Total Price</label>
      <input type="text" class="form-control" id="totalcost" name="ptotal">
    </div>
    <div class="form-group col-md-4">
      <label for="date">Date</label>
      <input type="date" class="form-control" id="" name="date">
    </div>
    <div class="text-center">
      <button type="submit" class="btn btn-danger" id="psubmit" name="csubmit">Submit</button>
      <a href="assets.php" class="btn btn-secondary">Close</a>
    </div>
  </form>
</div>
</div>
</div>
</body>
</html>
