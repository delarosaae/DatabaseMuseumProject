


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
  <li><a href="AddArtist.php">Add Artist</a></li>
  <li><a href="#contact">View ArtWorks</a></li>
  <li><a href="#about">View Events</a></li>
</ul>

<br>
<br>
<div class="container">
  <form action="AddArtistToDatabase.php">
  <div class="row">
    <div class="col-25">
      <label input="firstname">First Name</label>
    </div>
    <div class="col-75">
      <input type="text" id="fname" name="firstname" placeholder="Your name..">
    </div>
  </div>

  <div class="row">
    <div class="col-25">
      <label for="lname">Last Name</label>
    </div>
    <div class="col-75">
      <input type="text" id="lname" name="lastname" placeholder="Your last name..">
    </div>
  </div>

  <div class="row">
    <div class="col-25">
      <label for="Nationality">Nationality</label>
    </div>
    <div class="col-75">
      <select id="Nationality" name="Nationality">
        <option value="australia">Australia</option>
        <option value="canada">Canada</option>
        <option value="usa">USA</option>
        <option value="usa">Spain</option>
      </select>
    </div>
  </div>

 <div class="row">
    <div class="col-25">
      <label for="Speciality">Last Name</label>
    </div>
    <div class="col-75">
      <input type="text" id="Speciality" name="Speciality" placeholder="Your last Speciality..">
    </div>
  </div>


  <div class="row">
    <input type="submit" value="Submit">

  </div>
  </form>
</div>

</body>
</html>