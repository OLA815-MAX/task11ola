<?php
include('./databaseconn.php');
  if (isset($_POST['Register'])) {$name=$_POST['user_name'];
   $email=$_POST['email'];
    $con=$_POST['contact'];
    $pwd=$_POST['pwd'];
    if(!empty($name)&&!empty ($email)&&!empty($con)&&!empty($pwd)){$sql="INSERT INTO students(name,email,contact_info,password)VALUES('$name','$email','$con','$pwd')";
        $conn->exec($sql);
        echo "data inserted into students successfull";
    }
    # code...
}
?>











<!DOCTYPE html>



<html lang="en">

<head>
  <title>USER</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">

  <h2>registration</h2>
  
  <form method="POST" action ="<?php echo $_SERVER['PHP_SELF']?>">
    <div class="form-group">
    <div class="form-group">
        <label for="name">name:</label>
        <input type="text" class="form-control" id="name" placeholder="enter name" name="user_name">
</div>
      <label for="email">email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    <div class="form-group">
        <label for="contact">contact_info:</label>
        <input type="number" class="form-control" id="contact" placeholder="enter contact" name="contact">
</div>
    
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
    </div>
    <div class="checkbox">
      <label><input type="checkbox" name="remember"> Remember me</label>
    </div>
    <button type="submit" name="Register" class="btn btn-default" >Register a new student</button>
  </form>
</div>

</body>
</html>








