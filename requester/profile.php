<?php include "header.php"; ?>
 <?php  
  include"../dbcon.php";




if(isset($_SESSION['id']))
{
    
  $user_id = $_SESSION['id'];

  $query  = "SELECT * FROM userregistration WHERE id = '$user_id'";
  $result = mysqli_query($con, $query);
  if(!$result)
  {
     die("Query Failed" . mysqli_error($con));
   
  }

   

  while($row = mysqli_fetch_assoc($result))
  {
    $username = $row['name'];
    $email    = $row['email'];
  }

}


if(isset($_GET['update_user']))
{
    global $con;
    $email = $_GET['update_user'];
    $query = "SELECT * FROM userregistration WHERE email = '$email'";
    $result = mysqli_query($con, $query);
    $row = mysqli_fetch_assoc($result);
  }
  if (isset($_POST['submit'])) {
    if ($_POST['name']== "") {
      ?>
      <script>
        alert("Fill the name First");
      </script>
      <?php
    }else{
    $name = $_REQUEST['name'];
    $email = $_REQUEST['email'];
    $qry ="UPDATE `userregistration` SET name = '$name' WHERE id = '$user_id'";
    $run = mysqli_query($con,$qry);
    if ($run == true) {
      ?>
      <script>
        alert("Data Updated Successfully");
        //window.open("profile.php","_self");
      </script>
      <?php
      echo '<meta http-equiv="refresh" content="0;URL=?closed"/>';
    }else{
      die("ERROR".mysqli_error($con));
    }
}
}


?>

<html>
<body>
 <?php include "navigation.php";?>
<div class="margin4">
<div class="col-sm-6 mt-5">
  <form class="mx-5" method="POST">
    <div class="form-group">
     
      <label for="email">Email</label>
      <input type="email" class="form-control" id="" value="<?php echo $email; ?>" readonly>
    </div>
    <div class="form-group">
      <label for="name">Name</label>
      <input type="text" class="form-control" id="" name="name" value="<?php echo $username; ?>">
    </div>
    <button type="submit" class="btn btn-info" name="submit">Update</button>
  </form>
</div>
</div>
</div>
</body>
</html>