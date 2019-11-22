<html>
<body>
<style>
ul.Nav {
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

button.color{
    background-color: #260E46;
    color: red;
}

input.color{
    background-color: #260E46;
    color: red;
    margin-left: 10px;
}

input.colorNoMargin{
    background-color: #260E46;
    color: red;
}

body  {
  background-image: url("GardenSainteAdresse.jpg");
  background-size: cover;
  opacity: .6;
}

li.options{
    display: inline;
}


</style>
</head>
<body>

<ul class="Nav">
  <li><a href="MuseumMainPage.php">Home</a></li>
  <li><a href="AddEmployee.php">Employee Login</a></li>
  <li><a href="ViewArtworks.php">View ArtWorks</a></li>
  <li><a href="ViewEvents.php">View Events</a></li>
  <li><a href="EmployeeScreen.php">Employee Screen</a></li>
</ul>

<br></br>

<ul>
    <li class="options">
        <form action="AddEmployee.php">
            <input class="colorNoMargin" type="submit" value="Add Employee" />
        </form>
    </li>

    <li class="options">
        <form action="ViewEmployees.php">
            <input class="color" type="submit" value="View Employees" />
        </form>
    </li>

    <li class="options">
        <form action="DeleteEmployeeChoice.php">
            <input class="color" type="submit" value="Delete Employee" />
        </form>
    </li>  

    <li class="options">
        <form action="AddArtwork.php">
            <input class="color" type="submit" value="Add Art Work" />
        </form>
    </li>

    <li class="options">
        <form action="ViewArtWorks.php">
            <input class="color" type="submit" value="View Art Works" />
        </form>
    </li>

    <li class="options">
        <form action="DeleteArtPiece.php">
            <input class="color" type="submit" value="Delete Art Works" />
        </form>
    </li>

    <li class="options">
        <form action="AddArtist.php">
            <input class="color" type="submit" value="Add Artist" />
        </form>
    </li>

    <li class="options">
        <form action="ViewArtists.php">
            <input class="color" type="submit" value="View Artists" />
        </form>
    </li>

    <li class="options">
        <form action="DeleteArtist.php">
            <input class="color" type="submit" value="Delete Artist" />
        </form>
    </li>

    <li class="options">
        <form action="AddEvent.php">
            <input class="color" type="submit" value="Add Events" />
        </form>
    </li>

    <li class="options">
        <form action="ViewEvents.php">
            <input class="color" type="submit" value="View Events" />
        </form>
    </li>  

    <li class="options">
        <form action="ArtinWIng.php">
            <input class="color" type="submit" value="Art In Wing" />
        </form>
    </li>  
</ul>









</body>

</html> 