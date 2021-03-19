 <?php include "admin_header.php"; ?>
 <?php include '../dbcon.php'; ?>
<body>

 <?php include "admin_navigation.php";?>
 <?php
 $sql = "select max(id) from submit_report";
 $result = mysqli_query($con,$sql);
 $row = mysqli_fetch_row($result); 
 $submit_report = $row[0];

 $sql = "select max(id) from assign_tech";
 $result = mysqli_query($con,$sql);
 $row = mysqli_fetch_row($result); 
 $assign_tech = $row[0];

 $sql = "select max(id) from technician";
 $result = mysqli_query($con,$sql);
 $row = mysqli_fetch_row($result); 
 $technician = $row[0];
 ?>
<div class="margin">
<div class="col-sm-12 col-md-20">
  <div class="row mx-5 text-center">
    <div class="col-lg-4 mt-5">
      <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
        <div class="card-header">Request Received</div>
        <div class="card-body">
          <h4 class="card-title"><?php echo $submit_report?>
            
          </h4>
          <a class="btn text-white" href="">View</a>
        </div>
      </div>
    </div>
    <div class="col-lg-4 mt-5">
  
      <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
        <div class="card-header">Assigned Work</div>
        <div class="card-body">
          <h4 class="card-title"><?php echo $assign_tech?>
           
          </h4>
          <a class="btn text-white" href="">View</a>
        </div>
      </div>
    </div>
    
    <div class="col-lg-4 mt-5">
      <div class="card text-white bg-info mb-3" style="max-width: 18rem;">
        <div class="card-header">No. of Technician</div>
        <div class="card-body">
          <h4 class="card-title"><?php echo $technician?>
            
          </h4>
          <a class="btn text-white" href="">View</a>
        </div>
      </div>
    </div>
  </div>
   <div class="mx-5 mt-5 text-center">
    
    <p class=" bg-dark text-white p-2">List of Requesters</p>
    <?php 
    $sql ="Select * from userregistration";
    $result = mysqli_query($con,$sql);
    $row = mysqli_num_rows($result);
    if ($row > 0) {
      echo "<table class='table'>
  <thead>
   <tr>
    <th scope='col'>Requester ID</th>
    <th scope='col'>Name</th>
    <th scope='col'>Email</th>
   </tr>
  </thead>
  <tbody>";
  
  while( $run = mysqli_fetch_assoc($result)) {
    
echo "<tr>";
   echo"<td>".$run["id"]."</td>";
    echo"<td>".$run["name"]."</td>";
     echo"<td>".$run["email"]."</td>";
    
echo"</tr>";
  }
echo" </tbody>
 </table>";
  }else{
    echo "No Results";
  }
  ?>
  </div>
</div>
</div>


</div>
</div>
    
   





</body>
</html