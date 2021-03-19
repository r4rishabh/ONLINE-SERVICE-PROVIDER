<?php 
include 'header.php';

include '../dbcon.php';
 //include "navigation.php";
    $sql = "SELECT * FROM `submit_report` WHERE `id`= {$_SESSION['myid']}";
    $result = mysqli_query($con,$sql);
    $run = mysqli_num_rows($result);
    if ($run == 1) {
	    $row = mysqli_fetch_assoc($result);
	    echo "<html>
	    <body>
 <div class='margin5'>
 <div class='col-sm-5 mt-5 mx-4'>
  <h3 class='text-center mt-5'>Assigned Work Details</h3>
  <table class='table table-bordered'>
    <tbody>
      <tr>
        <td>Request ID</td>
        <td>
        ".$row['id']."
        </td>
      </tr>
      <tr>
        <td>Name</td>
        <td>
        ".$row['name']."
        </td>
      </tr>
      <tr>
        <td>Email</td>
        <td>
        ".$row['email']."
        </td>
      </tr>
      <tr>
        <td>Requester Info</td>
        <td>
        ".$row['info']."
        </td>
      </tr>
      <tr>
        <td>Description</td>
        <td>
        ".$row['description']."
        </td>
      </tr>
      </tbody>
  </table>
      <div class='text-center'>
    <form class='d-print-none d-inline mr-3'>
    	<input class='btn btn-info' type='submit' value='Print' onClick='window.print()''>
    </form>
   <form class='d-print-none d-inline' action='servicestatus.php'>
    	<input class='btn btn-secondary' type='submit' value='Close'>
    </form>  
  </div>
</div>
</div>
</form>
</body>
</html>
  
";    }else{
	    echo "Failed";
    }
?>