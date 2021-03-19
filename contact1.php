<?php
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
			window.open('home.php','_self');
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
?>