<?php include "header.php"; ?>
<?php include '../function.php';
              change_password();
?>
<body>

 <?php include "navigation.php";?>
<div class="margin4">
<div class="col-sm-9 col-md-10">
  <div class="row">
    <div class="col-sm-6">
      <form class="mt-5 mx-5" method="POST">
        <div class="form-group">
          <label for="">Email</label>
          <input type="email" class="form-control" id=""  value=<?php echo $_SESSION['email'];?> readonly>
        </div>
        <div class="form-group">
          <label for="">New Password</label>
          <input type="password" class="form-control" id="" placeholder="New Password" name="password">
        </div>
        <button type="submit" class="btn btn-info mr-4 mt-4" name="update">Update</button>
        <button type="reset" class="btn btn-secondary mt-4">Reset</button>
      </form>

    </div>

  </div>
</div>
</div>
</div>
</body>
</html>
