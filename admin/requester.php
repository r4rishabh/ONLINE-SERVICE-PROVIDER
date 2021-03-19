 <?php include "admin_header.php"; ?>
<body>

 <?php include "admin_navigation.php";?>
<div class="margin1">
<div class="col-sm-9 col-md-10 mt-5 text-center">
  <!--Table-->
  <p class=" bg-dark text-white p-2">List of Requesters</p>
  <?php
  $sql = "SELECT * FROM `userregistration`";
  $result = mysqli_query($con,$sql);
  $run = mysqli_num_rows($result);
  if ($run>0) {
    echo '<table class="table">
  <thead>
   <tr>
    <th scope="col">Requester ID</th>
    <th scope="col">Name</th>
    <th scope="col">Email</th>
    <th scope="col">Action</th>
   </tr>
  </thead>
  <tbody>';
  while ($row = mysqli_fetch_assoc($result)) {
     echo '
   <tr>
    <th scope="row">'.$row['id'].'</th>
    <td>'.$row['name'].'</td>
    <td>'.$row['email'].'</td>
    <td>
          <form action="editreq.php" method="POST" class="d-inline"> 
            <input type="hidden" name="id" value='.$row['id'].'>
            <button type="submit" class="btn btn-info mr-3" name="edit" value="">
              <i class="fas fa-pen">
              </i>
            </button>
          </form>  
        <form action="" method="POST" class="d-inline">
          <input type="hidden" name="id" value='.$row['id'].'>
          <button type="submit" class="btn btn-danger mr-3" name="delete" value="delete">
            <i class="far fa-trash-alt"></i>
          </button>
        </form>
       
     </td>
   </tr>';
 }
'</tbody>
 </table>';
   } 
  ?> 
   
</div>


</div>
<?php
if (isset($_REQUEST['delete'])) {
    $sql = "DELETE FROM `userregistration` WHERE `id`={$_REQUEST['id']}";
    $result = mysqli_query($con,$sql);
    if ($result== TRUE) {
    echo '<meta http-equiv="refresh" content="0;URL=?closed"/>';
    }else{
      echo "Unable To Delete";
    }
 } 
?>

<div class="float-down"><a href="addreq.php" class="btn btn-danger"><i class="fas fa-plus fa-1x"></i></a></div>
</body>

</html>
