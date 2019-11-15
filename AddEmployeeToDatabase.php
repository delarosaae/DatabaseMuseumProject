<html>
<body>
<style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: white;
}

li {
  float: left;
}

li a {
  display: block;
  color: red;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover {
  background-color: black;
}
</style>
<body>

<ul>
  <li><a class="active" href="MuseumMainPage.php">Home</a></li>
  <li><a href="AddEmployee.php">Employee Login</a></li>
  <li><a href="#contact">View ArtWorks</a></li>
  <li><a href="#about">View Events</a></li>
</ul>

<?php
 
$servername = "104.155.156.117";
$username = "root";
$password = "Museum508Database";
$dbname = "DatabaseProject";
$conn = mysqli_connect($servername, $username, $password, $dbname);

echo($_POST["firstname"]);

$firstNameToAdd = $_POST["firstname"];
$firstNameToAdd = stripslashes($firstNameToAdd);

$lastNameToAdd = $_POST["lastname"];
$lastNameToAdd = stripslashes($lastNameToAdd);

$phoneNumberToAdd = $_POST["phoneNumber"];
$phoneNumberToAdd = stripslashes($phoneNumberToAdd);


$insertEmployee = "insert into Employee (last_name, first_name, phone_number) values ('$lastNameToAdd', '$firstNameToAdd', '$phoneNumberToAdd')";

if (mysqli_query($conn, $insertEmployee))
{
    echo "Added Employee to Database";
}
else{
    echo "could not add employee to database";
}
mysqli_close($conn);


?>

</body>
</html> 