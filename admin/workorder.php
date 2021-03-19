 <?php include "admin_header.php"; ?>
<body>

 <?php include "admin_navigation.php";?>
 <div class="margin1">
<div class="col-sm-9 col-md-10 mt-5">
  <?php
  $sql ="SELECT * FROM `assign_tech`";
  $result = mysqli_query($con,$sql);
  $run = mysqli_num_rows($result);
  if ($run>0) {
     echo '<table class="table">
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
      <th scope="col">Action</th>
    </tr>
  </thead>';
 echo "<tbody>";
  while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo"<td scope='row'>".$row['id']."</td>";
    echo"<th scope='row'>".$row['info']."</th>";
    echo"<th scope='row'>".$row['name']."</th>";
    echo"<th scope='row'>".$row['address1']."</th>";
    echo"<th scope='row'>".$row['city']."</th>";
    echo"<th scope='row'>".$row['mobile']."</th>";
    echo"<th scope='row'>".$row['assigntech']."</th>";
    echo"<th scope='row'>".$row['date']."</th>";
 echo " <td><form action='assignworkdetails.php' method='POST' class='d-inline'> <input type='hidden' name='id' value=".$row['id']."><button type='submit' class='btn btn-primary' name='view' value='view'><i class='far fa-eye'></i></button></form>
    <form action='' method='POST' class='d-inline'><input type='hidden' name='id' value='".$row['id']."'><button type='submit' class='btn btn-danger' name='delete' value='delete'><i class='far fa-trash-alt'></i></button></form>
    </td>";
    echo"</tr>";
  }
   echo"</tbody> </table>"; 
}else{
  echo "<div class='alert alert-warning'>No Data</div>";
}if (isset($_REQUEST['delete'])) {
  $sql="DELETE FROM `assign_tech` WHERE `id`={$_REQUEST['id']}";
  $result = mysqli_query($con,$sql);
  if ($result==True) {
    echo '<meta http-equiv="refresh" content="0;URL=?closed"/>';
  }else{
    echo "Unable To DELETE";
  }
}

  ?>


</div>
</div>
</body>
</html>