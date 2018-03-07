<?php

?>
<!DOCTYPE html>
<html>
  <head>
    <title>GFCMSU Attendance App</title>
    <link rel="stylesheet" href="#">
  </head>
  <body>
    <div>
  	 <h1>GFCMSU</h1>
    </div>
  	<div>
  		<h2>Welcome to the Student Attendance Management System</h2>
  	</div>
  	<div>
	  	<p>The fastest way to manage, maintain, and track your classroom attendance.</p>
  	</div>
    <div>
  	<form action="something.php" method="post">
      <p>Select Login Type:
	  	  <input type="radio" name="loginType" value="executive"> Executive
	  	  <input type="radio" name="loginType" value="administrator"> Administrator
	  	  <input type="radio" name="loginType" value="faculty"> Faculty
      </p>
      <p>Enter Username:
        <input type="text" name="username">
      </p>
      <p>Enter Password:
        <input type="password" name="password">
      </p>
      <p>
        <input type="checkbox" name="passwordVisible" value="passwordVisibile"> Check to make password visible
      </p>
      <p>Forgot your username?<br>
        <a href="#">Retrieve Username</a>
      </p>
      <p>Forgot your password?<br>
        <a href="#">Reset Password</a>
      </p>
      <input type="submit" value="Login">
  	</form>
  </div>
  </body>
</html>
