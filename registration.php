<?php include"header.php";?>
<?php include"navbar.php";?>
<?php include"function.php";
      registration();
?>
<div class="container pt-5 mt-5" id="">
  <h2 class="text-center">Create an Account</h2>
   <div class="row mt-4 mb-4">
    <div class="col-md-6 offset-md-3"> 
      <form action="" method="post" onsubmit="return validation()" class="shadow-lg p-4" method="post" class="bg-light">
         <div class="form-group">
          <i class="fas fa-user"></i>
          <label for="name" class="pl-2 font-weight-bold">Username</label>
          <input type="text"class="form-control" placeholder="Enter Your Username" name="user" id="user">
          <span id="username" class="text-danger font-weight-bold"></span>
        </div>
       
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
         <div class="form-group">
         <i class="fas fa-mobile-alt"></i>
          <label for="pass" class="pl-2 font-weight-bold">Mobile Number</label>
          <input type="text" class="form-control" placeholder="Enter Your Password" name="phone" id="MobileNumber">
          <span id="mobileno" class="text-danger font-weight-bold"></span>
        </div>
         <div class="form-group">
          <i class="fas fa-user"></i>
          <label for="email" class="pl-2 font-weight-bold">Email</label>
          <input type="email"class="form-control" placeholder="Enter Your Email" name="email" id="email">
          <span id="emailsid" class="text-danger font-weight-bold"></span>
          <!--Add text-white below if want text color white-->
          <small class="form-text">We'll never share your email with anyone else.</small>
        </div>
        <button type="submit" class="btn btn-primary mt-5 btn-block shadow-sm font-weight-bold" name="submit" value="submit" id="btn">Sign Up</button>
        
       
      </form>
      <div class="text-right"><a class="btn btn-outline-success mt-3  shadow-sm  font-weight-bold" href="home.php">Back
            to Home</a>
           <a  class="btn btn-outline-success mt-3  shadow-sm  font-weight-bold" href="login.php">Go To Login</a>
      </div>
    </div>
  </div>
</div>


<script type="text/javascript">
    function validation(){
      var user=document.getElementById('user').value;
      var Pass=document.getElementById('Pass').value;
      var conpass=document.getElementById('conpass').value;
      var MobileNumber=document.getElementById('MobileNumber').value;
      var email=document.getElementById('email').value;

            if(user==""){
        document.getElementById('username').innerHTML="** please enter the username field";
        return false;
      }
      if((user.length<=2)||(user.length>20)){
        document.getElementById('username').innerHTML="** length should be between 2 and 20";
        return false;

      }
      if(!isNaN(user)){
        document.getElementById('username').innerHTML="** Number is not allowed ";
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
      if(Pass!=conpass){
        document.getElementById('confrmpass').innerHTML="** password and confirm password are not same";
        return false;
      } 



      if(conpass==""){
        document.getElementById("confrmpass").innerHTML="** please enter the confirm password field";
        return false;
      }




      if(MobileNumber==""){
        document.getElementById('mobileno').innerHTML="** please enter the Mobile Number field";
        return false;
      }
      if(isNaN(MobileNumber)){
          document.getElementById('mobileno').innerHTML="** characters are not allowed";
        return false; 
      }
      if(MobileNumber.length!=10){
          document.getElementById('mobileno').innerHTML="** there should be 10 digits";
        return false; 
      }



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
    }
  </script>

</body>
</html>
