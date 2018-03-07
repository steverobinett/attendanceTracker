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
  		<h2>Steven Robinett Student Attendance Management System</h2>
  	</div>
    <div class="">
  	<form action="something.php" method="post">
      <p>Select Semester:
	<input type="text" name="term">
      </p>
      <p>Enter Course::
        <input type="text" name="course">
      </p>
      <p>Date
        <input type="text" name="date">
	Class Time
	<input type="text" name="class_time">
	<input type="submit" value="Retrieve Class Roster">
      </p>
	</form>
	</div>
	<div class="">
	<form action="something.php" method="post">
	<p>Name
	On Time
	Late
	Absent
	Excused
	</p>
      	<!--insert mysql query, similar to the example Steve showed me to query the database and use a foreach statement to create the name, on time, late, absent, excused line for each student dynamically via php.-->
	<p>Notes<br>
	<input type="textarea" name="notes">
	</p>
	<input type="submit" value="Update">
  	</form>
  </div>
  </body>
</html>
