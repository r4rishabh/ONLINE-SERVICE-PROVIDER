
<?php include"header.php";?>
<?php include"navbar.php";?>
<?php include"function.php";
if (isset($_POST['submit'])) {
  if (isset($_POST['email'])&& isset($_POST['pass'])) {
     login($_POST['email'],$_POST['pass']);
  }
}
     
?>
  <div  class="container mt-5 pt-5 mb-2 text-center mt-5" style="font-size: 30px;">
    <i class="fas fa-stethoscope"></i>
    <span>ONLINE SERVICE PROVIDER</span>
  </div>
 <!--  <p class="text-center" style="font-size: 20px;"> <i class="fas fa-user-secret text-danger"></i> <span>Admin
      Area(Demo)</span> -->
  </p>
  <div class="container-fluid mb-5">
    <div class="row justify-content-center custom-margin">
      <div class="col-sm-6 col-md-4">
        <form action="" onsubmit="return validation()" class="shadow-lg p-4" method="POST">
          <div class="form-group">
            <i class="fas fa-user"></i>
            <label for="email" class="pl-2 font-weight-bold">Email</label>
            <input type="email" class="form-control" placeholder="Email" name="email" id="email">
            <span id="emailsid" class="text-danger font-weight-bold"></span>
            <!--Add text-white below if want text color white-->
            <small class="form-text">We'll never share your email with anyone else.</small>
          </div>
          <div class="form-group">
            <i class="fas fa-key"></i>
            <label for="pass" class="pl-2 font-weight-bold">Password</label>
            <input type="password" class="form-control" placeholder="Password" name="pass" id="Pass">
            <span id="passwords" class="text-danger font-weight-bold"></span>
          </div>
          <a href="forget_password/request.php">Forget Password</a>
          <button type="submit" class="btn btn-outline-primary mt-3 btn-block shadow-sm font-weight-bold" name="submit" value="submit">Login</button>
          
        </form>
        <div class="text-center"><a class="btn btn-outline-success mt-3  shadow-sm  font-weight-bold" href="home.php">Back
            to Home</a></div>
      </div>
    </div>
  </div>
<script type="text/javascript">
    function validation(){
      var email=document.getElementById('email').value;
      var Pass=document.getElementById('Pass').value;
      
        if(email==""){
        document.getElementById('emailsid').innerHTML="** please enter the email field";
        return false; 
      }
      if(email.indexOf('@')<=0) {
         document.getElementById('emailsid').innerHTML="** @ invalid postion";
        return false;   
      } 
      if((email.charAt(email.length-4)!='.')&&(email.charAt(email.length-3)!='.')){

        document.getElementById('emailsid').innerHTML="** . invalid postion";
        return false;
      }


      if(Pass==""){
        document.getElementById('passwords').innerHTML="** please enter the password field";
        return false;
      }
      if((Pass.length<=2)||(Pass.length>20)){
        document.getElementById('passwords').innerHTML="** length should be between 5 and 20";
        return false;
      }
      



    }
  </script>

 </body>
 </html>