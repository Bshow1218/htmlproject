<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link rel="stylesheet" href="css/login.css">
<!------ Include the above in your HEAD tag ---------->
<html>

<body>
	<div class="main">
		<div class="col-md-6 col-sm-12">
			<div class="login-form">
				<form method="post" enctype="multipart/form-data" action="upload.php">
					<div class="form-group">
						<label>Username</label>
						<input name="username" type="text" required="text">
					</div>
					<div class="form-group">
						<label for="password">Password</label>
						<input name="password" type="password" required="password" class="form-control">
					</div>
					<div class="form-group">
						<label>Item Name</label>
						<input name="itemName" type="text" required="text" class="form-control">
					</div>
					<div class="form-group">
						<label>Item Price</label>
						<input name="itemPrice" type="text" required="text" class="form-control">
					</div>
					<div class="form-group">
						<label>Item Stock</label>
						<input name="itemStock" type="text" required="text" class="form-control">
					</div>
					<div class="form-group">
						<label>Item Picture</label>
						<input name="itemPic" type="file">
					</div>
					<input type="submit" value="Register Item" class="btn btn-secondary">
				</form>
			</div>
		</div>
	</div>
</body>

</html>