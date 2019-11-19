<html>
<body>
<style>
.navbar {
  overflow: hidden;
  background-color: #000000;
 
}
.og{
    
     float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 0px 16px;
  text-decoration: none;
  margin-top: 45px;
}

.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  
 
}
.logo {
    display: inline-block;
    vertical-align: top;
    width: 100px;
    height: 80px;
    margin-right: 20px;
    margin-left: 10px;
    margin-top: 0px;    
}

.navbar a:hover, .subnav:hover .subnavbtn {
  background-color: #c88f57;
}

</style>
<body>

<div class="navbar">

<img class="logo" src="logo.png" align="left">

<div>
  <a class="og" href="MuseumMainPage.php">Home</a>
</div>

<div>
<a class="og" href="AddEmployee.php">Employee Login</a>
</div>

<div>
  <a class="og" href="#contact">View ArtWorks</a>
</div>

<div>
  <a class="og" href="#about">View Events</a>
</div>

</div>


<?php
 
$servername = "104.155.156.117";
$username = "root";
$password = "Museum508Database";
$dbname = "DatabaseProject";
$conn = mysqli_connect($servername, $username, $password, $dbname);

echo($_POST["Title"]);

$titleToAdd = $_POST["Title"];
$titleToAdd = stripslashes($titleToAdd);

$mediumToAdd = $_POST["Medium"];
$mediumToAdd = stripslashes($mediumToAdd);

$Wing_IDToAdd = $_POST["Wing_ID"];
$Wing_IDToAdd = stripslashes($Wing_IDToAdd);


$insertArtPiece = "insert into ArtPiece(artId, artMedium, artistId, WingId, title) values (null, '$mediumToAdd', null, '$Wing_IDToAdd', '$Wing_ID')";

if (mysqli_query($conn, $insertArtPiece))
{
    echo " has been added to the Art Database";
}
else{
    echo " could not be add to the Art database";
}
mysqli_close($conn);


?>

</body>
</html> 