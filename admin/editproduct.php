<?php include "admin_header.php"; ?>
<body>

 <?php include "admin_navigation.php";?>
 <div class="margin1">
<div class="col-sm-6 mt-5  mx-3 jumbotron">
  <h3 class="text-center">Update Product Details</h3>
  <?php
  if (isset($_REQUEST['editproduct'])) {
    $qry="SELECT * FROM `assets` WHERE `id`={$_REQUEST['id']}";
    $result=mysqli_query($con,$qry);
    $row=mysqli_fetch_assoc($result);
  }
  if (isset($_REQUEST['update'])) {
    if (($_REQUEST['db_id']=="")||($_REQUEST['db_name']=="")||($_REQUEST['db_date']=="")||($_REQUEST['db_available']=="")||($_REQUEST['db_total']=="")||($_REQUEST['db_cost']=="")||($_REQUEST['db_sell']=="")) {
      ?>
        <script>
          alert('Fill All Fields!!!');
        </script>
        <?php
    }else{
        $rid = $_REQUEST['db_id'];
        $rname = $_REQUEST['db_name'];
        $rdate = $_REQUEST['db_date'];
        $ravailable = $_REQUEST['db_available'];
        $rtotal = $_REQUEST['db_total'];
        $rcost = $_REQUEST['db_cost'];
        $rsell = $_REQUEST['db_sell'];
       $sql = "UPDATE `assets` SET id ='$rid' ,name = '$rname',date_purchase= '$rdate',prod_available='$ravailable',prod_total ='$rtotal',cost_price='$rcost',selling_price='$rsell' WHERE id= '$rid'";
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
      <label for="db_id">Product ID</label>
      <input type="text" class="form-control" id="rid" name="db_id" value="<?php 
      if(isset($row['id'])){
        echo($row['id']);
      } ?>"readonly>
    </div>
    <div class="form-group">
      <label for="db_name">Name</label>
      <input type="text" class="form-control" id="" name="db_name" value="<?php 
      if(isset($row['name'])){
        echo($row['name']);
      } ?>">
    </div>
    <div class="form-group">
      <label for="db_date">DOP</label>
      <input type="date" class="form-control" id="pdop" name="db_date" value="<?php 
      if(isset($row['date_purchase'])){
        echo($row['date_purchase']);
      } ?>">
    </div>
    <div class="form-group">
      <label for="db_available">Available</label>
      <input type="text" class="form-control" id="" name="db_available" value="<?php 
      if(isset($row['prod_available'])){
        echo($row['prod_available']);
      } ?>">
    </div>
    <div class="form-group">
      <label for="db_total">Total</label>
      <input type="text" class="form-control" id="" name="db_total" value="<?php 
      if(isset($row['prod_total'])){
        echo($row['prod_total']);
      } ?>">
    </div>
    <div class="form-group">
      <label for="db_cost">Original Cost Each</label>
      <input type="text" class="form-control" id="" name="db_cost" value="<?php 
      if(isset($row['cost_price'])){
        echo($row['cost_price']);
      } ?>">
    </div>
    <div class="form-group">
      <label for="db_sell">Selling Price Each</label>
      <input type="text" class="form-control" id="" name="db_sell" value="<?php 
      if(isset($row['selling_price'])){
        echo($row['selling_price']);
      } ?>">
        
            </div>
    <div class="text-center">
      <button type="submit" class="btn btn-danger" id="" name="update">Update</button>
      <a href="assets.php" class="btn btn-secondary">Close</a>
    </div>
  </form>
</div>
</div>
</body>
</html
