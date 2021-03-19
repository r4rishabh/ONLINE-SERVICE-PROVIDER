<?php
include '../requester/header.php';

// if(!isset($_GET['code']))
// {
// 	exit("can't find the page");
// }

 $code = $_GET['code'];


$query = "SELECT email FROM reset WHERE code='$code'";
$result = mysqli_query($con, $query);

if(!$result)
{
	die("Query Failed" . mysqli_error($con));
}

if($row=mysqli_num_rows($result) == 0)
{
	exit("can't find the page");
}

if(isset($_POST['submit']))
{
	$pw = $_POST['pass'];
	$cpw = $_POST['conpass'];


	$row = mysqli_fetch_array($result);

	 $email = $row['email'];

	$query = "UPDATE userregistration SET ";
	$query .= "password='$pw', ";
	$query .= "conpassword='$cpw' ";
    $query .= "WHERE email='$email' ";
	$result1 = mysqli_query($con, $query);

	if(!$result1)
		{
		  die("Query Failed" . mysqli_error($con));
		}

	if($result)
	{
		$query = "DELETE FROM reset WHERE code = '$code'";
		$result2 = mysqli_query($con, $query);

		if(!$result2)
		{
		  die("Query Failed" . mysqli_error($con));
		}

		else
		{
			exit("Password Updated");
		}

     }
		

}

?> 
















<body>
<div class="container pt-5" id="" >
  <h2 class="text-center margint">Change Your Password :)</h2>
   <div class="row mt-4 mb-4">
    <div class="col-md-6 offset-md-3"> 
      <form action="" class="shadow-lg p-4" method="post" class="bg-light">
         
       
        <div class="form-group">
          <i class="fas fa-key"></i>
          <label for="pass" class="pl-2 font-weight-bold">Password</label>
          <input type="password" class="form-control" placeholder="Enter Your Password" name="pass" id="Pass">
          <span id="passwords" class="text-danger font-weight-bold"></span>
        </div>
         <div class="form-group">
          <i class="fas fa-key"></i>
          <label for="pass" class="pl-2 font-weight-bold">Confirm Password</label>
          <input type="password" class="form-control" placeholder="Enter Your Password" name="conpass" id="conpass">
          <span id="confrmpass" class="text-danger font-weight-bold"></span>
        </div>

         <button type="submit" class="btn btn-primary mt-3 btn-block shadow-sm font-weight-bold" name="submit" value="submit">Change Password</button>
         
        
       
      </form>
    </div>
  </div>
</div>
