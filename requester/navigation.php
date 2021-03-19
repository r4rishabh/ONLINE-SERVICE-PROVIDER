<nav class="navbar navbar-expand-sm bg-dark navbar-dark navbar-fixed-top navbar-inverse ">
             

            <div class="container">
                <a  class="navbar-brand text-warning fornt-weight-bold ">ONLINE SERVICE PROVIDER</a>
                <span class="navbar-text text-white">Customer satisfaction, our primary motto</span>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsenavbar">
          <span class="navbar-toggler-icon"></span>

        </button> 

                  <div class="collapse navbar-collapse text-center " id="collapsenavbar">
                    <ul class="nav navbar-nav ml-auto navbar-right ">
                      <li class="nav-item"><a href="../home.php" class="nav-link text-white">HOME</a></li>
                      <li class="dropdown" class="nav-item"  >
                        <a  class="nav-link text-white"  class="dropdown-toggle" data-toggle="dropdown" href=""><i class="fa fa-user">Welcome <?php echo $_SESSION['email']; ?></i>
                         <b class="caret"></b></a>
                            <ul class="dropdown-menu mr-auto">
                               <li class="nav-item">
                                 <a class="nav-link text-dark" href=""><i class="fa fa-fw fa-user"></i> Profile</a>
                                </li>
                               <li class="divider" class="nav-item"></li>
                               <li>
                                  <a class="nav-link text-dark" href="logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                              </li>
                           </ul>
                      </li>
                    </ul>
                  </div>
                    
                              
            </div>
        </nav>



         <div class="container-fluid">

  <div class="row">

   <nav class="navbar bg-dark navbar-dark py-3 d-print-none ">

    <div class="sidebar-sticky">
     <ul class="nav flex-column">
      <li class="nav-item">
       <a class="nav-link text-white" href="profile.php">
        <i class="fas fa-user"></i>
        Profile
       </a>
      </li>
      <li class="nav-item">
       <a class="nav-link text-white" href="submitrequest.php">
        <i class="fab fa-accessible-icon"></i>
        Submit Report
       </a>
      </li>
      <li class="nav-item">
       <a class="nav-link text-white" href="servicestatus.php">
        <i class="fas fa-align-center"></i>
        Service Status
       </a>
      </li>
      <li class="nav-item">
       <a class="nav-link text-white" href="cp.php">
        <i class="fas fa-key"></i>
        Change Password
       </a>
      </li>
      <li class="nav-item">
       <a class="nav-link text-white" href="logout.php">
        <i class="fas fa-sign-out-alt"></i>
        Logout
       </a>
      </li>
     </ul>
    </div>
   </nav>
</div>
</div>