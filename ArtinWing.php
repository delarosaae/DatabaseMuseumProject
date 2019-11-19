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


.dropbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
  display: block;
}

.dropdown:hover .dropbtn {
  background-color: #3e8e41;
}



</style>
</head>
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

<br></br>



<div class="dropdown">
  <button class="dropbtn">Dropdown</button>
  <div class="dropdown-content"  method="POST">
  <a id="wing_Name" href="#" value="selected">Eastern Art</a>
  <a id="wing_Name" href="#" value="selected">American Art</a>
  <a id="wing_Name" href="#" value="selected">European Art</a>
  <a id="wing_Name" href="#" value="selected">African Art</a>
  </div>
</div>





<div class="container">
  <form method="POST">
  <div class="row">
    <div class="col-25">
      <label input="wing_Name">Wing Name</label>
    </div>
    <div class="col-75">
      <input type="text" id="fname" name="wing_Name" placeholder="wing Name..">
    </div>
  </div>

  <div class="row">
    <input type="submit" value="Submit">

  </div>
  </form>
</div>

<?php
 
$servername = "104.155.156.117";
$username = "root";
$password = "Museum508Database";
$dbname = "DatabaseProject";
$conn = mysqli_connect($servername, $username, $password, $dbname);


$input = $_POST["wing_Name"];
$input = stripslashes($firstNameToAdd);
	



$sql = "Call ArtinWing(input)";

if ($result = mysqli_query($conn, $sql)) {
    while($row = mysqli_fetch_assoc($Title)) {
        
       echo "Title: " . $row["a.title"] ."<br>";

        echo "<br>";
    }

} else {
    echo "0 results";
}


mysqli_close($conn);


?>
</body>

</html> 