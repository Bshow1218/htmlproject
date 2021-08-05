
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link rel="stylesheet" href="css/login.css">
<!------ Include the above in your HEAD tag ---------->

<div class="main">
   <div class="col-md-6 col-sm-12">
      <div class="login-form">
         <form method="post">
            <div class="form-group">
               <label>User Name</label>
               <input name="username" type="text" required="username" class="form-control" placeholder="User Name">
            </div>
            <div class="form-group">
               <label>Password</label>
               <input name="password" type="password" required="password" class="form-control" placeholder="Password">
            </div>
	    <div class="form-group">
	    	<label for="email">E-Mail</label>
		<input name="email" type="e-mail" required="email" class="form-control" placeholder="E-Mail">
	    </div>
            <button type="submit" class="btn btn-secondary">Register</button>
         </form>
      </div>
   </div>
</div>
<?php
$enable_mysql = true;
if ($enable_mysql && $_POST['username']!=null && $_POST['password']!=null && $_POST['email']!=null) {
   $servername = "localhost";
   $username = "min20120907";
   $password = "jefflin123";
   $dbname = "ii525";

   // Create connection
   $conn = new mysqli($servername, $username, $password, $dbname);
   // Check connection
   if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
   }

   $sql = "INSERT INTO Accounts (username, email, password)
VALUES ('". $_POST['username'] . "', '". $_POST['email'] . "', '" . $_POST['password'] . "')";

   if ($conn->query($sql) === TRUE) {
      echo "New record created successfully";
   } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
   }

   $conn->close();
}
?>