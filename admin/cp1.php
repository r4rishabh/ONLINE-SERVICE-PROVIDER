<?php include "admin_header.php"; ?>
<body>

 <?php include "admin_navigation.php";?>
<div class="margin1">
<div class="col-sm-9 col-md-10">
  <div class="row">
    <div class="col-sm-6">
      <form class="mt-5 mx-5" method="POST">
        <div class="form-group">
          <label for="">Email</label>
          <input type="email" class="form-control" id="" value="" readonly>
        </div>
        <div class="form-group">
          <label for="">New Password</label>
          <input type="password" class="form-control" id="" placeholder="New Password" name="">
        </div>
        <button type="submit" class="btn btn-info mr-4 mt-4" name="">Update</button>
        <button type="reset" class="btn btn-secondary mt-4">Reset</button>
      </form>

    </div>

  </div>
</div>
</div>
</div>
</body>
</html>
