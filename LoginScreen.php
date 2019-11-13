<html>
<body>



<?php
 
$servername = "104.155.156.117";
$username = "root";
$password = "Museum508Database";
$dbname = "DatabaseProject";
$conn = mysqli_connect($servername, $username, $password, $dbname);
	
$getAllEmployee = "Select * from Employee";
$listOfAllEmployee = mysqli_query($conn, $getAllEmployee);

if (mysqli_num_rows($listOfAllEmployee) > 0) {
    while($row = mysqli_fetch_assoc($listOfAllEmployee)) {
        echo "empId: " . $row["empId"]."<br>". "last_name: " . $row["last_name"]."<br>". "First Name:  ". $row["first_name"] ."<br>". "Phone Number:  ". $row["phone_number"]. "<br>";
    }
} else {
    echo "0 results";
}

mysqli_close($conn);


?>
</body>

</html> 