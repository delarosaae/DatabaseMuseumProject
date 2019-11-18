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
</head>
<body>

<ul>
  <li><a class="active" href="MuseumMainPage.php">Home</a></li>
  <li><a href="AddEmployee.php">Employee Login</a></li>
  <li><a href="#contact">View ArtWorks</a></li>
  <li><a href="#about">View Events</a></li>
</ul>

<br></br>

<?php
 
$servername = "104.155.156.117";
$username = "root";
$password = "Museum508Database";
$dbname = "DatabaseProject";
$conn = mysqli_connect($servername, $username, $password, $dbname);
	
$viewArtist = "Select * from Artist";
$artistList = mysqli_query($conn, $viewArtist);


if (mysqli_num_rows($artistList) > 0) {
    while($row = mysqli_fetch_assoc($artistList)) {
        
       echo "Artist Id: " . $row["artistId"] ."<br>" . "last_name: " . $row["last_name"] ."<br>" . "First Name:  " . $row["first_name"] ."<br>". "Nationality:  ". $row["nationality"]. "<br>"."Specility: " . $row["specility"] ."<br>";

        echo "<br>";
    }

} else {
    echo "0 results";
}


mysqli_close($conn);


?>
</body>

</html> 