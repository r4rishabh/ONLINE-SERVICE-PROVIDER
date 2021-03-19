<?php
function registration(){
  
include('dbcon.php');
if(isset($_POST['submit'])){
 $user    = $_POST['user'];
 $pass    = $_POST['pass'];
 $conpass = $_POST['conpass'];
 $phone   = $_POST['phone'];
 $email   = $_POST['email'];
 //$userrole  = $_POST['userrole'];
 $qry = "SELECT * FROM `userregistration` WHERE email = '$email'";

 $result = mysqli_query($con,$qry);
 
 $num = mysqli_num_rows($result);
 
 if ($num > 0) {
    ?>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
     swal({
                  title: "Opps",
                  text: "Email Already Exist!! Try With New Email",
                   icon: "error",
            });
        //window.open('registration.php','_self');
        </script>
    <?php
    //header('Location:registration.php');
 }
 else{

    $sql ="INSERT INTO `userregistration`(`name`, `password`, `conpassword`, `phone`, `email`, userrole)VALUES ('$user','$pass','$conpass','$phone','$email', 'subscriber')";
    mysqli_query($con,$sql);
    ?>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script>swal("Good job!", "Registration Successful!! Now Go To login", "success");
        //window.open('login.php','_self');
        </script>

    <?php
 echo "<script> location.href='login.php'</script>";
}
}
}
?>
<?php
function contact(){ 
include("dbcon.php");
if(isset($_POST['submit'])){
	$name    = $_POST['name'];
	$subject = $_POST['subject'];
	$email   = $_POST['email'];
	$message = $_POST['message'];
	$qry = "SELECT * FROM `contact` WHERE email = '$email'";
	$result = mysqli_query($con,$qry);
	$run = mysqli_num_rows($result);
	if ($run >0) {
		?>
		<script>
			alert("User email is already exist!! try different email");
			window.open('contact.php','_self');
		</script>
		<?php
	}
else{
	$q = "INSERT INTO `contact`(`name`, `subject`, `email`, `message`) VALUES ('$name','$subject','$email','$message')";
        mysqli_query($con,$q);
	?>
		<script>
			alert("Thankyou For contacting Us!!!!");
			window.open('home.php','_self');
		</script>
		<?php
}
}
}
?>
<?php
function login($email,$pass){
  session_start();
 include("dbcon.php");
	 $email = $_POST['email'];
	 $pass  = $_POST['pass'];
	 $qry ="SELECT * FROM `userregistration` WHERE email = '$email'";
	$result = mysqli_query($con,$qry);
    if (!$result) {
      die("QUERY FAILED".mysqli_error($con));
    }
    while ($row = mysqli_fetch_assoc($result)) {
       $db_id = $row['id'];
      $db_email = $row['email'];
      $db_password = $row['password'];
      $db_userrole = $row['userrole'];
     if ($email == $db_email && $pass == $db_password) {
       $_SESSION['id'] = $db_id;
       $_SESSION['email'] = $db_email;
       $_SESSION['pass'] = $db_password;
       $_SESSION['userrole'] = $db_userrole;
      
       if ($_SESSION['userrole'] == 'subscriber') {
         header("Location:requester/profile.php?update_user=$email");
       }elseif ($_SESSION['userrole'] == 'admin') {
         header("Location:admin/index.php");
       }
       else{
        ?>
        <script>
          alert("Invalid Password Or Username");
        </script>
        <?php
       }
     }
  }
}
?>
<?php
function submit_request(){
  include '../dbcon.php';
  if (isset($_POST['submit'])) {
    if (($_POST['info']=="")||($_POST['description']=="")||($_POST['name']=="")||($_POST['address1']=="")||($_POST['address2']=="")||($_POST['city']=="")||($_POST['state']=="")||($_POST['zip']=="")||($_POST['email']=="")||($_POST['mobile']=="")||($_POST['date']=="")) {
      ?>
      <script>
        alert("Fill All The Fileds First!!!");
      </script>
      <?php
    }else{
    $info = $_POST['info'];
    $description = $_POST['description'];
    $name = $_POST['name'];
    $address1 = $_POST['address1'];
    $address2 = $_POST['address2'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $zip = $_POST['zip'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $date = $_POST['date'];
    $qry = "INSERT INTO `submit_report`( `info`, `description`, `name`, `address1`, `address2`, `city`, `state`, `zip`, `email`, `mobile`, `date`) VALUES ('$info','$description','$name','$address1','$address2','$city','$state','$zip','$email','$mobile','$date')";
    $result = mysqli_query($con,$qry);
    if (!$result) {
      die("QUERY FAILED".mysqli_error($con));
    }
    else{
      $genid = mysqli_insert_id($con);
      ?>
      <script>
        alert("Request Submmited Successfully!!!");
      </script>
      <?php
      $_SESSION['myid'] = $genid;
      echo "<script> location.href='submitrequestsuccess.php'</script>";
      //header("Location:submitrequestsuccess.php");
    }
  }
  }
}
?>
<?php
 function change_password(){
  include '../dbcon.php';
  $email = $_SESSION['email'];
  if (isset($_POST['update'])) {
    if ($_POST['password']=="") {
      ?>
      <script>
        alert('Fill The Password First');
      </script>
      <?php
    }else{
  
  $db_password = $_POST['password'];
  $db_conpassword = $_POST['password'];
  $sql ="UPDATE `userregistration` SET password = '$db_password',conpassword='$db_conpassword' WHERE `email`='$email'";
  $result = mysqli_query($con,$sql);
  if ($result == TRUE) {
    ?>
      <script>
        alert('Password Updated Successfully');
      </script>
      <?php
  }else{
    echo "Unable to UPDATE Password";
  }
}
 }
}


?>