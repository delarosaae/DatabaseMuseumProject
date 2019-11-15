<html>
<body>

<form action="/AddToDatabase.php">
  First name:<br>
  <input type="text" name="firstname">
  <br>
  Last name:<br>
  <input type="text" name="lastname">
  <br>
  Phone Number:<br>
  <input type="text" name="phoneNumber">
  <br><br>
  <input type="submit" value="Submit">
</form> 

<br></br>

<?php
 
$servername = "104.155.156.117";
$username = "root";
$password = "Museum508Database";
$dbname = "DatabaseProject";
$conn = mysqli_connect($servername, $username, $password, $dbname);
	


mysqli_close($conn);


?>
</body>

</html> 
