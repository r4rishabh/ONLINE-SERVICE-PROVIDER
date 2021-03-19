<?php include"header.php";?>
<?php include'function.php';
      contact();
?>


<body>



<div class="container pt-5" id="contact">
  <h2 class="text-center">Contact Us</h2>
  <div class="row mt-4 mb-4">
    <div class="col-md-6 offset-md-3"> 
		 <form action="" class="shadow-lg p-4" method="post">
			  <input type="text" class="form-control" name="name" placeholder="Name"><br>
			  <input type="text" class="form-control" name="subject" placeholder="Subject"><br>
			  <input type="email" class="form-control" name="email" placeholder="E-mail"><br>
			  <textarea class="form-control" name="message" placeholder="How can we help you?" style="height:150px;"></textarea><br>
			  <input class="btn btn-dark" type="submit" value="Send" name="submit"><br><br>
		 </form>
	</div>
	</div>
	</div>	 
</div>

</body>
</html>