
 <?php include "admin_header.php"; ?>
<body>

 <?php include "admin_navigation.php";?>
<div class="margin1">

<div class="col-sm-9 col-md-10 mt-5 text-center">
  <!--Table-->
  <p class=" bg-dark text-white p-2">Product/Parts Details</p>
  <?php
  $sql ="SELECT * FROM `assets`";
  $result = mysqli_query($con,$sql);
  if ($result->num_rows>0) {
    echo'<table class="table">
    <thead>
      <tr>
        <th scope="col">Product ID</th>
        <th scope="col">Name</th>
        <th scope="col">DOP</th>
        <th scope="col">Available</th>
        <th scope="col">Total</th>
        <th scope="col">Original Cost Each</th>
        <th scope="col">Selling Price Each</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>';
    while ($row=mysqli_fetch_assoc($result)) {
      echo ' <tr>
        <th scope="row">'.$row['id'].'</th>
        <td>'.$row['name'].'</td>
        <td>'.$row['date_purchase'].'</td>
        <td>'.$row['prod_available'].'</td>
        <td>'.$row['prod_total'].'</td>
        <td>'.$row['cost_price'].'</td>
        <td>'.$row['selling_price'].'</td>
        <td>
        <form action="editproduct.php" method="POST" class="d-inline">
           <input type="hidden" name="id" value='.$row['id'].'>
           <button type="submit" class="btn btn-info" name="editproduct" value="">
            <i class="fas fa-pen"></i>
          </button>
        </form>  
          <form action="" method="POST" class="d-inline">
            <input type="hidden" name="id" value='.$row['id'].'>
            <button type="submit" class="btn btn-danger" name="delete" value="Delete">
              <i class="far fa-trash-alt"></i>
            </button>
          </form>
          <form action="sellproduct.php" method="" class="d-inline">
            <input type="hidden" name="id" value='.$row['id'].'>
            <button type="submit" class="btn btn-success" name="sellproduct" value="">
              <i class="fas fa-handshake"></i>
            </button>
          </form>
           
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
<?php
if (isset($_REQUEST['delete'])) {
    $sql = "DELETE FROM `assets` WHERE `id`={$_REQUEST['id']}";
    $result = mysqli_query($con,$sql);
    if ($result== TRUE) {
    echo '<meta http-equiv="refresh" content="0;URL=?closed"/>';
    }else{
      echo "Unable To Delete";
    }
 } 
 ?>
</div>
</div>
</div>

</div>
</div>
<a href="addproduct.php" class="btn btn-danger"><i class="fas fa-plus fa-1x"></i></a>
</body>
</html>
