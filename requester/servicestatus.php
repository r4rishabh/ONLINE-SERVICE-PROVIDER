<?php include "header.php"; ?>
<html>
<body>
 <?php include "navigation.php";?>
<div class="margin4">
<div class="col-sm-6 mt-5  mx-4">
  <form action="" class="mt-3 form-inline d-print-none">
    <div class="form-group mr-3">
      <label for="">Enter Request ID: </label>
      <input type="text" class="form-control ml-3" id="checkid" name="checkid">
    </div>
    <button type="submit" class="btn btn-primary" name="submit">Search</button>
  </form>
  <?php
  if (isset($_REQUEST['checkid'])) {
    if ($_REQUEST['checkid']=="") {
      echo "<div class='alert alert-warning mt-4'>Enter Request ID First</div>";
    }else{
    $sql="SELECT * FROM `assign_tech` WHERE `id`= {$_REQUEST['checkid']}";
    $result = mysqli_query($con,$sql);
    $run = mysqli_fetch_assoc($result);
    if (($run['id']== $_REQUEST['checkid'])) {
   ?>
   <div class='margin5'>
 
  <h3 class="text-center mt-5">Assigned Work Details</h3>
  <table class="table table-bordered ">
    <tbody>
      <tr>
        <td>Request ID</td>
        <td>
          <?php if(isset($run['id'])) {
            echo $run['id'];
          } ?>
        </td>
      </tr>
      <tr>
        <td>Request Info</td>
        <td>
          <?php if(isset($run['info'])) {
            echo $run['info'];
          } ?>
        </td>
      </tr>
      <tr>
        <td>Request Description</td>
        <td>
          <?php if(isset($run['description'])) {
            echo $run['description'];
          } ?>
        </td>
      </tr>
      <tr>
        <td>Name</td>
        <td>
          <?php if(isset($run['name'])) {
            echo $run['name'];
          } ?>
        </td>
      </tr>
      <tr>
        <td>Address Line 1</td>
        <td>
          <?php if(isset($run['address1'])) {
            echo $run['address1'];
          } ?>
        </td>
      </tr>
      <tr>
        <td>Address Line 2</td>
        <td>
          <?php if(isset($run['address2'])) {
            echo $run['address2'];
          } ?>
        </td>
      </tr>
      <tr>
        <td>City</td>
        <td>
          <?php if(isset($run['city'])) {
            echo $run['city'];
          } ?>
        </td>
      </tr>
      <tr>
        <td>State</td>
        <td>
          <?php if(isset($run['state'])) {
            echo $run['state'];
          } ?>
        </td>
      </tr>
      <tr>
        <td>Zip</td>
        <td>
          <?php if(isset($run['zip'])) {
            echo $run['zip'];
          } ?>
        </td>
      </tr>
      <tr>
        <td>Email</td>
        <td>
          <?php if(isset($run['email'])) {
            echo $run['email'];
          } ?>
        </td>
      </tr>
      <tr>
        <td>Mobile</td>
        <td>
          <?php if(isset($run['mobile'])) {
            echo $run['mobile'];
          } ?>
        </td>
      </tr>
      <tr>
        <td>Assigned Date</td>
        <td>
          <?php if(isset($run['date'])) {
            echo $run['date'];
          } ?>
        </td>
      </tr>
      <tr>
        <td>Technician Name</td>
        <td>
          <?php if(isset($run['assigntech'])) {
            echo $run['assigntech'];
          } ?>
        </td>
      </tr>
      <tr>
        <td>Customer Sign</td>
        <td>
          
        </td>
      </tr>
      <tr>
        <td>Technician Sign</td>
        <td> 
          
        </td>
      </tr>
       </tbody>
  </table>
</div>

    
  <div class="text-center">
   <tr><td> <form class="d-print-none d-inline mr-3" >
    <div class="float-center">
    	<input class="btn btn-info mr-4" type="submit" value="Print" onClick="window.print()">
    </form></td></tr>

   <tr><td> <form class="d-print-none d-inline mr-3" action="servicestatus.php">

    	<input class="btn btn-secondary" type="submit" value="Close">
    </form></td></tr></div>
  
   
<?php } else{
 echo "<div class='alert alert-info mt-4'> Your Request is Still Pending</div>";
} 
}
}?>
  
</div>
</div>
</div>
</body>
</html>