<?php include "header.php"; ?>
<?php include "../function.php";
              submit_request();
?>
<body>

 <?php include "navigation.php";?>
<div class="margin4">
<div class="col-sm-9 col-md-10 mt-5">
  <form class="mx-5" action="" method="POST">
    <div class="form-group">
      <label for="">Request Info</label>
      <input type="text" class="form-control" id="" placeholder="Request Info" name="info">
    </div>
    <div class="form-group">
      <label for="">Description</label>
      <input type="text" class="form-control" id="" placeholder="Write Description" name="description">
    </div>
    <div class="form-group">
      <label for="">Name</label>
      <input type="text" class="form-control" id="" placeholder="" name="name">
    </div>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="">Address Line 1</label>
        <input type="text" class="form-control" id="" placeholder="House No. 123" name="address1">
      </div>
      <div class="form-group col-md-6">
        <label for="">Address Line 2</label>
        <input type="text" class="form-control" id="" placeholder="Railway Colony" name="address2">
      </div>
    </div>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="">City</label>
        <input type="text" class="form-control" id="" name="city">
      </div>
      <div class="form-group col-md-4">
        <label for="">State</label>
        <input type="text" class="form-control" id="" name="state">
      </div>
      <div class="form-group col-md-2">
        <label for="">Zip</label>
        <input type="text" class="form-control" id="" name="zip">
      </div>
    </div>

    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="">Email</label>
        <input type="email" class="form-control" id="" name="email">
      </div>
      <div class="form-group col-md-2">
        <label for="">Mobile</label>
        <input type="text" class="form-control" id="" name="mobile">
      </div>
      <div class="form-group col-md-4">
        <label for="">Date</label>
        <input type="date" class="form-control" id="" name="date">
      </div>
    </div>

    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
    <button type="reset" class="btn btn-secondary">Reset</button>
  </form>
</div>
</div>
</div>
</body>
</html>

