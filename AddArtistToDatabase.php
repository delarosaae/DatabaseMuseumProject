<html>
<body>
<style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover {
  background-color: #111;
}
</style>
<body>

<ul>
  <li><a class="active" href="MuseumMainPage.php">Home</a></li>
  <li><a href="AddArtist.php">Add Artist</a></li>
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

$NationalityToAdd = $_POST["nationality"];
$NationalityToAdd = stripslashes($NationalityToAdd);

$SpecialityToAdd = $_POST["speciality"];
$SpecialityToAdd = stripslashes($pSpecialityToAdd);

$insertArtist = "insert into Artist(last_name, first_name, nationality, speciality) values ('$lastNameToAdd', '$firstNameToAdd', '$NationalityToAdd','$SpecialityToAdd')";

if (mysqli_query($conn, $insertArtist))
{
    echo " has been added to the Artist Database";
}
else{
    echo " could not be add to the Artist database";
}
mysqli_close($conn);


?>

</body>
</html> 