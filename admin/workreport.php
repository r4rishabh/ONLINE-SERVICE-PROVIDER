 <?php include "admin_header.php"; ?>
<body>

 <?php include "admin_navigation.php";?>
<div class="margin1">
<div class="col-sm-9 col-md-10 mt-5 text-center">
  <form action="" method="POST" class="d-print-none">
    <div class="form-row">
      <div class="form-group col-md-4">
        <input type="date" class="form-control" id="startdate" name="startdate">
      </div> <span> to </span>
      <div class="form-group col-md-4">
        <input type="date" class="form-control" id="enddate" name="enddate">
      </div>
      <div class="form-group">
        <input type="submit" class="btn btn-secondary" name="searchsubmit" value="Search">
      </div>
    </div>
  </form>
  <?php
  if (isset($_REQUEST['searchsubmit'])) {
     $startdate = $_REQUEST['startdate'];
     $enddate = $_REQUEST['enddate'];
     $sql ="select * from assign_tech where date between '$startdate' and '$enddate'";
     $result = mysqli_query($con,$sql);
     if ($result->num_rows > 0) {
       echo '<p class=" bg-dark text-white p-2 mt-4">Details</p>
  <table class="table">
  <thead>
    <tr>
      <th scope="col">Req ID</th>
      <th scope="col">Request Info</th>
      <th scope="col">Name</th>
      <th scope="col">Address</th>
      <th scope="col">City</th>
      <th scope="col">Mobile</th>
      <th scope="col">Technician</th>
      <th scope="col">Assigned Date</th>
    </tr>
  </thead>
  <tbody>';
    while ($row = mysqli_fetch_assoc($result)) {
      echo '<tr>
    <th scope="row">'.$row['id'].'</th>
    <td>'.$row['info'].'</td>
    <td>'.$row['name'].'</td>
    <td>'.$row['address1'].'</td>
    <td>'.$row['city'].'</td>
    <td>'.$row['mobile'].'</td>
    <td>'.$row['assigntech'].'</td>
    <td>'.$row['date'].'</td>
      </tr>
    </tr>
    <td>
      <form class="d-print-none">
        <input class="btn btn-danger" type="submit" value="Print" onClick="window.print()">
      </form>
    </td>
  </tr>';
    }
    '</tbody>
  </table>';
     }
   } 
  ?>
</div>

</div>
</div>
</div>
</body>
</html>
