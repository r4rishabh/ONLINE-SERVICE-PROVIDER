

<?php include "admin_header.php"; ?>
<body>

 <?php include "admin_navigation.php";?>
<div class="margin1">



<div class="col-sm-9 col-md-10 mt-5 text-center">
  <!--Table-->
  <p class=" bg-dark text-white p-2">List of Technicians</p>
  <?php
  $sql ="SELECT * FROM `technician`";
  $result = mysqli_query($con,$sql);
  $run = mysqli_num_rows($result);
  if ($run>0) {
     echo '<table class="table">
  <thead>
   <tr>
    <th scope="col">Emp ID</th>
    <th scope="col">Name</th>
    <th scope="col">City</th>
    <th scope="col">Mobile</th>
    <th scope="col">Email</th>
    <th scope="col">Action</th>
   </tr>
  </thead>
  <tbody>';
   
   while ($row=mysqli_fetch_assoc($result)) {
     echo '<tr>
    <th scope="row">'.$row['id'].'</th>
    <td>'.$row['name'].'</td>
    <td>'.$row['city'].'</td>
    <td>'.$row['mobile'].'</td>
    <td>'.$row['email'].'</td>
    <td>
    <form action="edittech.php" method="POST" class="d-inline"> 
          <input type="hidden" name="id" value='.$row['id'].'>
          <button type="submit" class="btn btn-info mr-3" name="edit" value="">
            <i class="fas fa-pen"></i>
          </button>
        </form>  
        <form action="" method="POST" class="d-inline">
          <input type="hidden" name="id" value='.$row['id'].'>
          <button type="submit" class="btn btn-danger mr-3" name="delete" value="">
            <i class="far fa-trash-alt"></i>
          </button>
        </form> 
        
       </tr>';
}

 '</tbody>
 </table>';
   
 }
  ?>
        
</div>
<?php
if (isset($_REQUEST['delete'])) {
    $sql = "DELETE FROM `technician` WHERE `id`={$_REQUEST['id']}";
    $result = mysqli_query($con,$sql);
    if ($result== TRUE) {
    echo '<meta http-equiv="refresh" content="0;URL=?closed"/>';
    }else{
      echo "Unable To Delete";
    }
 } 
 ?>
</div>
<div class="float-down"><a href="addtech.php" class="btn btn-danger"><i class="fas fa-plus fa-1x"></i></a></div>
</body>
</html
