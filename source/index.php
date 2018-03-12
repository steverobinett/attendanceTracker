<?php
?>
<!DOCTYPE html>
<html>
	<head>
		<title>GFCMSU Attendance App</title>
		<link rel="stylesheet" href="stylesheet.css">
	</head>
	<div class="content">
		<h1>GFCMSU</h1>
		<h2>Welcome to the Student Attendance Management System</h2>
		<div class="summary">
			The fastest way to manage, maintain, and track your classroom attendance.
		</div>
		<div>
			<form action="something.php" method="post">
				<div class="form-section"><label>Select Login Type:</label>
					<input type="radio" name="loginType" value="executive"> Executive
					<input type="radio" name="loginType" value="administrator"> Administrator
					<input type="radio" name="loginType" value="faculty"> Faculty
				</div>
				<div class="form-section"><label>Enter Username:</label>
					<div class="full-width-input"><input type="text" name="username">
					</div>
				</div>
				<div class="form-section"><label>Enter Password:</label>
					<div class="full-width-input"><input type="password" name="password">
				</div>
				</div>
				<p class="password-visible-section">
					<input type="checkbox" name="passwordVisible" value="passwordVisibile"> Check to make password visible
				</p>
				<p>Forgot your username?<br>
					<a href="#">Retrieve Username</a>
				</p>
				<p class="reset-password-section">Forgot your password?<br>
					<a href="#">Reset Password</a>
				</p>
				<input type="submit" value="Login" class="login-button">
			</form>
		</div>
	</body>
</html>