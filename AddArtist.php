<html>
<head>
<style>
* {
  box-sizing: border-box;
}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

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


<br>
<br>
<div class="container">
  <form action="AddArtistToDatabase.php" method="POST">
  <div class="row">
    <div class="col-25">
      <label input="firstname">First Name</label>
    </div>
    <div class="col-75">
      <input type="text" id="fname" name="firstname" placeholder="Artist First Name..">
    </div>
  </div>

  <div class="row">
    <div class="col-25">
      <label for="lname">Last Name</label>
    </div>
    <div class="col-75">
      <input type="text" id="lname" name="lastname" placeholder="Artist Last Name..">
    </div>
  </div>

 <div class="row">
    <div class="col-25">
      <label for="nationality">Nationality</label>
    </div>
    <div class="col-75">
      <input type="text" id="nationality" name="nationality" placeholder="Artist Nationality..">
    </div>
  </div>

 <div class="row">
    <div class="col-25">
      <label for="speciality">Speciality</label>
    </div>
    <div class="col-75">
      <input type="text" id="speciality" name="speciality" placeholder="Artist Speciality..">
    </div>
  </div>


  <div class="row">
    <input type="submit" value="Submit">

  </div>
  </form>
</div>

</body>
</html>