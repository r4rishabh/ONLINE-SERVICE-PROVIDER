<?php include "../requester/header.php"; ?> 



<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function



use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

// Instantiation and passing `true` enables exceptions

if(isset($_POST['submit']))
{


 $email =    $_POST['email'];

 $code = uniqid(true);
 
 $query = "INSERT INTO reset(code, email) VALUES('$code', '$email')";
 $result = mysqli_query($con, $query);

 if(!$result)
 {
    die("Query Failed" . mysqli_error($con));
 }




$mail = new PHPMailer(true);

try {
    //Server settings
   // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'pankaj.guptaboss1997@gmail.com';                     // SMTP username
    $mail->Password   = '@#89PAgu';                               // SMTP password
    $mail->SMTPSecure = 'tls';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom('pankaj.guptaboss1997@gmail.com', 'Pankaj');
    $mail->addAddress($email);     // Add a recipient
    // $mail->addAddress('ellen@example.com');               // Name is optional
    // $mail->addReplyTo('info@example.com', 'Information');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    // Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    // Content

    $url = "http://" . $_SERVER["HTTP_HOST"] . dirname($_SERVER["PHP_SELF"]) . "/reset.php?code=$code";

    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Your password reset link';
    $mail->Body    = "<h1>You recieved a change password link</h1> 
                       <a href='$url'> Click Here</a> to do so";
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    ?>
    <script>
    	alert("Please check your email");
    </script>
    <?php
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
//echo '<meta http-equiv="refresh" content="0;URL=?closed"/>';
}

?>





<?php

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
    $username = $row['username'];
    $email    = $row['email'];
  }
 
}

?>
















<body>
 <div class="mb-3 text-center mt-5" style="font-size: 30px; margin-top: 70px">
    
   <?php if(!isset($email_sent)): ?>


    <span class="">Forget Password?</span>
  </div>

  </p>
  <div class="container-fluid mb-5">
    <div class="row justify-content-center custom-margin">
      <div class="col-sm-6 col-md-4">
        <form   class="shadow-lg p-4" method="post">
          <div class="form-group">
            <i class="fas fa-user"></i>
            <label for="email" name="email" class="pl-2 font-weight-bold"  >Email</label>
            <input type="email" class="form-control" placeholder="Email" name="email" id="email" value="">
            <span id="emailsid" class="text-danger font-weight-bold"></span>
            <!--Add text-white below if want text color white-->
            
          </div>
         
         
          <button type="submit" class="btn btn-primary mt-3 btn-block shadow-sm font-weight-bold" name="submit" value="submit">Reset</button>
          <?php else: ?>
            <h2 > Please Check Your Email </h2>

        <?php endif; ?>
        </form>
       
      </div>
    </div>
  </div>
</body>
</html>