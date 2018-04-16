<?php

 session_start();
// check user login
if(empty($_SESSION['user_id']))
{
    header("Location: index.php");
}
?>
<!DOCTYPE html>

<!--
Jeremiah Reyer
March 2, 2017 -->

<head>
	<meta charset= "utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel ="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>Edit Movie</title>
	<style>
h1 {
        text-align:center;
    }
    h2.top {
        text-align:center;
    }
    h3 {
        text-align:center;
    }
    
    body.splitComplementary {
        background-color: #046A38;
        color: #ffffff;
        font-family: arial, Helvetica, sans-serif;
        text-align: left;
    }
    
    .navbar {
      overflow: hidden;
      background-color: #333;
      font-family: Arial, Helvetica, sans-serif;
    }

    .navbar a {
        float: left;
        font-size: 16px;
        color: white;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
    }

    .dropdown {
        float: left;
        overflow: hidden;
    }

    .dropdown .dropbtn {
        cursor: pointer;
        font-size: 16px;    
        border: none;
        outline: none;
        color: white;
        padding: 14px 16px;
        background-color: inherit;
        font-family: inherit;
        margin: 0;
    }

    .dropdown .dropbtn2 {
        cursor: pointer;
        font-size: 16px;    
        border: none;
        outline: none;
        color: white;
        padding: 14px 16px;
        background-color: inherit;
        font-family: inherit;
        margin: 0;
    }

    .dropdown .dropbtn3 {
        cursor: pointer;
        font-size: 16px;    
        border: none;
        outline: none;
        color: white;
        padding: 14px 16px;
        background-color: inherit;
        font-family: inherit;
        margin: 0;
    }

.navbar a:hover, .dropdown:hover .dropbtn, .dropbtn:focus {
    background-color: #97D700;
}

.navbar a:hover, .dropdown:hover .dropbtn2, .dropbtn2:focus {
    background-color: #97D700;
}

.navbar a:hover, .dropdown:hover .dropbtn3, .dropbtn3:focus {
    background-color: #97D700;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #97D700;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    float: none;
    color: white;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {
    background-color: #d1d1d1;
}

.show {
    display: block;
}

.search-container {
  float: right;
}

.navbar input[type=text] {
  padding: 6px;
  margin-top: 8px;
  font-size: 17px;
  border: none;
}

.navbar .search-container button {
  float: right;
  padding: 6px 10px;
  margin-top: 8px;
  margin-right: 16px;
  background: #ddd;
  font-size: 17px;
  border: none;
  cursor: pointer;
}

.navbar .search-container button:hover {
  background: #ccc;
}
</style>
</head>

<body class ="splitComplementary">

<div class="navbar">
  <a href="../profile.php">Home</a>
  <div class="dropdown">
    <button class="dropbtn" onclick="myFunction()">Add
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content" id="myDropdown">
      <a href="../Add/addMovie.php">Movie</a>
      <a href="../Add/addActor.php">Actor</a>
      <a href="../Add/addStudio.php">Studio</a>
      <a href="../Add/addComposer.php">Composer</a>
      <a href="../Add/addTheater.php">Theater</a>
      <a href="../Add/addProducer.php">Producer</a>
      <a href="../Add/addProductionCompany.php">Production Company</a>
      <a href="../Add/addScreenWriter.php">Screen Writer</a>
      <a href="../Add/addCritic.php">Critic</a>
      <a href="../Add/addDirector.php">Director</a>
    </div>
  </div> 
  <div class="dropdown">
    <button class="dropbtn2" onclick="myFunction2()">Delete
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content" id="myDropdown2">
      <a href="../Delete/deleteMovie.php">Movie</a>
      <a href="../Delete/deleteActor.php">Actor</a>
      <a href="../Delete/deleteStudio.php">Studio</a>
      <a href="../Delete/deleteComposer.php">Composer</a>
      <a href="../Delete/deleteTheater.php">Theater</a>
      <a href="../Delete/deleteProducer.php">Producer</a>
      <a href="../Delete/deleteProductionCompany.php">Production Company</a>
      <a href="../Delete/deleteScreenWriter.php">Screen Writer</a>
      <a href="../Delete/deleteCritic.php">Critic</a>
      <a href="../Delete.deleteDirector.php">Director</a>
    </div>
  </div> 
  <div class="dropdown">
    <button class="dropbtn3" onclick="myFunction3()">Edit
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content" id="myDropdown3">
      <a href="./editMovie.php">Movie</a>
      <a href="./editActor.php">Actor</a>
      <a href="./editStudio.php">Studio</a>
      <a href="./editComposer.php">Composer</a>
      <a href="./editTheater.php">Theater</a>
      <a href="./editProducer.php">Producer</a>
      <a href="./editProductionCompany.php">Production Company</a>
      <a href="./editScreenWriter.php">Screen Writer</a>
      <a href="./editCritic.php">Critic</a>
      <a href="./editDirector.php">Director</a>
    </div>
  </div> 
  <div class="search-container">
    <form action="../Search/search.php" method="post">
      <input type="text" placeholder="Search..." name="search">
        <button type = "submit"><i class="fa fa-search"></i></button>
    </form>
  </div>
</div>

<p style="float:right"><a href="../Search/advancedSearch.php">Advanced Search</a></p>

	<h1 class = "name">Edit Movie</h1>
	
	<form action="editMovie.php" method="post">

	<div style="float:left;  margin-left: 5px; margin-right: 5px">
			<p>Studio<br></p>
			<input name = studioName type = "text" placeholder = "Name"><br>
			<input name = moviesFunded type = "number" placeholder = "Movies Funded"><br>
			<input name = setLocations type = "number" placeholder = "Set Locations"><br>
			<input name = hq type = "text" placeholder = "HQ"><br>
			<input name = moviesPublished type = "number" placeholder = "Movies Published"><br>
			<input name = founder type = "text" placeholder = "Founder"><br>
			<input name = month type = "number" placeholder = "Month Founded"><br>
			<input name = year type = "number" placeholder = "Year Founded"><br>
	</div>
		
	<div style="float:left; margin-left: 5px; margin-right: 5px">
			<p>Actor<br></p>
			<input name = a_name type = "text" placeholder = "Name"><br>
			<input name = a_age type = "number" placeholder = "Age"><br>
			<input name = a_bmonth type = "number" placeholder = "Birth Month"><br>
			<input name = a_byear type = "number" placeholder = "Birth Year"><br>
			<input name = a_bday type = "number" placeholder = "Birth Day"><br>
			<input name = a_sex type = "text" placeholder = "Sex (M or F)"><br>
			<input name = a_award type = "text" placeholder = "Highest Award Earned"><br>
	</div>

	<div style="float:left; margin-left: 5px; margin-right: 5px">
			<p>Composer<br></p>
			<input name = c_name type = "text" placeholder = "Name"><br>
			<input name = c_age type = "number" placeholder = "Age"><br>
			<input name = c_bmonth type = "number" placeholder = "Birth Month"><br>
			<input name = c_byear type = "number" placeholder = "Birth Year"><br>
			<input name = c_bday type = "number" placeholder = "Birth Day"><br>
			<input name = c_sex type = "text" placeholder = "Sex (M or F)"><br>
			<input name = c_award type = "text" placeholder = "Highest Award Earned"><br>
	</div>

	<div style="float:left; margin-left: 5px; margin-right: 5px">
			<p>Director<br></p>
			<input name = d_name type = "text" placeholder = "Name"><br>
			<input name = d_age type = "number" placeholder = "Age"><br>
			<input name = d_bmonth type = "number" placeholder = "Birth Month"><br>
			<input name = d_byear type = "number" placeholder = "Birth Year"><br>
			<input name = d_bday type = "number" placeholder = "Birth Day"><br>
			<input name = d_sex type = "text" placeholder = "Sex (M or F)"><br>
			<input name = d_award type = "text" placeholder = "Highest Award Earned"><br>
	</div>

	<div style="float:left; margin-left: 5px; margin-right: 5px">
			<p>Producer<br></p>
			<input name = p_name type = "text" placeholder = "Name"><br>
			<input name = p_age type = "number" placeholder = "Age"><br>
			<input name = p_bmonth type = "number" placeholder = "Birth Month"><br>
			<input name = p_byear type = "number" placeholder = "Birth Year"><br>
			<input name = p_bday type = "number" placeholder = "Birth Day"><br>
			<input name = p_sex type = "text" placeholder = "Sex (M or F)"><br>
			<input name = p_award type = "text" placeholder = "Highest Award Earned"><br>
	</div>

	<div style="float:left; margin-left: 5px; margin-right: 5px">
			<p>Production Company<br></p>
			<input name = pc_name type = "text" placeholder = "Name"><br>
			<input name = pc_president type = "text" placeholder = "President Name"><br>
			<input name = pc_fmonth type = "number" placeholder = "Founding Month"><br>
			<input name = pc_fyear type = "number" placeholder = "Founding Year"><br>
			<input name = pc_fday type = "number" placeholder = "Founding Day"><br>
			<input name = pc_city type = "text" placeholder = "HQ City"><br>
			<input name = pc_state type = "text" placeholder = "HQ State"><br>
			<input name = pc_locations type = "number" placeholder = "Number of Offices"><br>
			<input name = pc_founder type = "text" placeholder = "Founder Name"><br>
	</div>

	<div style="float:left; margin-left: 5px; margin-right: 5px; clear: right">
			<p>Movie<br></p>
			<input name = profit type = "number" placeholder = "Total Profits"><br>
			<input name = m_name required type = "text" placeholder = "Movie Name"><br>
			<input name = genre type = "text" placeholder = "Genre"><br>
			<input name = runtime type = "number" placeholder = "Runtime in Minutes"><br>
			<input name = cost type = "number" placeholder = "Cost to Make"><br>
      <input name = score type = "number" placeholder = "Score (out of 10)"><br>
	</div>

	<div style= "position:absolute; margin-left: 5px; margin-top:250px; margin-bottom: 5px">
			<p>Screen Writer<br></p>
			<input name = s_name type = "text" placeholder = "Name"><br>
			<input name = s_age type = "number" placeholder = "Age"><br>
			<input name = s_bmonth type = "number" placeholder = "Birth Month"><br>
			<input name = s_byear type = "number" placeholder = "Birth Year"><br>
			<input name = s_bday type = "number" placeholder = "Birth Day"><br>
			<input name = s_sex type = "text" placeholder = "Sex (M or F)"><br>
			<input type = "submit" value = "GO" name = "editMovie" />
			<input type = "reset" value = "Reset"/>
	</div>

	</form>

<?php
  if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['editMovie']))
  {
	//debugging
	error_reporting(E_ALL);
	ini_set('display_errors', '1');
  
	//connect to database
	$servername = "127.0.0.1";
	$db_username = "cosc471";
	$db_password = "represent satellites drink nobody";
	$db_name   = "COSC471";
	
	$conn = new mysqli($servername, $db_username, $db_password, $db_name);
	
	if ($conn->connect_error)
	{
    	die("Connection failed: " . $conn->connect_error);
	}
	
	//STUDIO
	
		//get input data
		$s_name = $_POST['studioName'];
		$moviesfunded = $_POST['moviesFunded'];
		$setlocations = $_POST['setLocations'];
		$hq = $_POST['hq'];
		$moviespublished = $_POST['moviesPublished'];
		$founder = $_POST['founder'];
		$month = $_POST['month'];
		$year = $_POST['year'];
				
		//if foreign key is entered
		if ($s_name != NULL)
		{	
			//confirm that foreign key exists
			$exists = false;
			$sql = "SELECT name FROM Studio;";
			$results = $conn->query($sql);
			while($row = $results->fetch_assoc()) 		//search through primary keys
			{
				if ($s_name == $row['name'])				//if primary key is found
				{
					$exists = true;
				}
			}
			
			//if foreign key tuple does not exist create one
			if ($exists == false)
			{
				//insert data
				$sql = "INSERT INTO Studio (name, movies_funded, set_locations, hq, movies_published, founder, month, year)
				VALUES ('$s_name','$moviesfunded','$setlocations','$hq','$moviespublished','$founder','$month','$year')";
					
				//report whether operation was successful
				if ($conn->query($sql) === TRUE) {
					echo "<script>alert('New entry recorded.')</script>";
				} else {
					echo "<script>alert('Error: ' . $sql . $conn->error)</script>";
				}
			}
		}
	
	//ACTOR
	
		//get input data
		$a_name = $_POST['a_name'];
		$age = $_POST['a_age'];
		$month = $_POST['a_bmonth'];
		$year = $_POST['a_byear'];
		$day = $_POST['a_bday'];
		$sex = $_POST['a_sex'];
		$award = $_POST['a_award'];
		
		//if foreign key is entered
		if ($a_name != NULL)
		{	
			//confirm that foreign key exists
			$exists = false;
			$sql = "SELECT name FROM Actors;";
			$results = $conn->query($sql);
			while($row = $results->fetch_assoc()) 		//search through primary keys
			{
				if ($a_name == $row['name'])				//if primary key is found
				{
					$exists = true;
				}
			}
					
			//if foreign key tuple does not exist create one
			if ($exists == false)
			{
				//insert data
				$sql = "INSERT INTO Actors (name, age, month, year, day, sex, award)
				VALUES ('$a_name','$age','$month','$year','$day','$sex','$award')";
					
				//report whether operation was successful
				if ($conn->query($sql) === TRUE) {
					echo "<script>alert('New entry recorded.')</script>";
				} else {
					echo "<script>alert('Error: ' . $sql . $conn->error)</script>";
				}
			}
		}
	//COMPOSER
	
		//get input data
		$c_name = $_POST['c_name'];
		$age = $_POST['c_age'];
		$month = $_POST['c_bmonth'];
		$year = $_POST['c_byear'];
		$day = $_POST['c_bday'];
		$sex = $_POST['c_sex'];
		$award = $_POST['c_award'];
		
		//if foreign key is entered
		if ($c_name != NULL)
		{	
			//confirm that foreign key exists
			$exists = false;
			$sql = "SELECT name FROM Composer;";
			$results = $conn->query($sql);
			while($row = $results->fetch_assoc()) 		//search through primary keys
			{
				if ($c_name == $row['name'])				//if primary key is found
				{
					$exists = true;
				}
			}
					
			//if foreign key tuple does not exist create one
			if ($exists == false)
			{		
				//insert data
				$sql = "INSERT INTO Composer (name, age, month, year, day, sex, award)
				VALUES ('$c_name','$age','$month','$year','$day','$sex','$award')";
					
				//report whether operation was successful
				if ($conn->query($sql) === TRUE) {
					echo "<script>alert('New entry recorded.')</script>";
				} else {
					echo "<script>alert('Error: ' . $sql . $conn->error)</script>";
				}
			}
		}
	
	//DIRECTOR
	
		//get input data
		$d_name = $_POST['d_name'];
		$age = $_POST['d_age'];
		$month = $_POST['d_bmonth'];
		$year = $_POST['d_byear'];
		$day = $_POST['d_bday'];
		$sex = $_POST['d_sex'];
		$award = $_POST['d_award'];
		
		//if foreign key is entered
		if ($d_name != NULL)
		{	
			//confirm that foreign key exists
			$exists = false;
			$sql = "SELECT name FROM Director;";
			$results = $conn->query($sql);
			while($row = $results->fetch_assoc()) 		//search through primary keys
			{
				if ($d_name == $row['name'])				//if primary key is found
				{
					$exists = true;
				}
			}
					
			//if foreign key tuple does not exist create one
			if ($exists == false)
			{
				//insert data
				$sql = "INSERT INTO Director (name, age, month, year, day, sex, award)
				VALUES ('$d_name','$age','$month','$year','$day','$sex','$award')";
					
				//report whether operation was successful
				if ($conn->query($sql) === TRUE) {
					echo "<script>alert('New entry recorded.')</script>";
				} else {
					echo "<script>alert('Error: ' . $sql . $conn->error)</script>";
				}
			}
		}
	
	//PRODUCER
	
		//get input data
		$p_name = $_POST['p_name'];
		$age = $_POST['p_age'];
		$month = $_POST['p_bmonth'];
		$year = $_POST['p_byear'];
		$day = $_POST['p_bday'];
		$sex = $_POST['p_sex'];
		$award = $_POST['p_award'];
		
		//if foreign key is entered
		if ($p_name != NULL)
		{	
			//confirm that foreign key exists
			$exists = false;
			$sql = "SELECT name FROM Producer;";
			$results = $conn->query($sql);
			while($row = $results->fetch_assoc()) 		//search through primary keys
			{
				if ($p_name == $row['name'])				//if primary key is found
				{
					$exists = true;
				}
			}
					
			//if foreign key tuple does not exist create one
			if ($exists == false)
			{		
				//insert data
				$sql = "INSERT INTO Producer (name, age, month, year, day, sex, award)
				VALUES ('$p_name','$age','$month','$year','$day','$sex','$award')";
					
				//report whether operation was successful
				if ($conn->query($sql) === TRUE) {
					echo "<script>alert('New entry recorded.')</script>";
				} else {
					echo "<script>alert('Error: ' . $sql . $conn->error)</script>";
				}
			}
		}
	
	//PRODUCTION_COMPANY
	
		//get input data
		$pc_name = $_POST['pc_name'];
		$president = $_POST['pc_president'];
		$month = $_POST['pc_fmonth'];
		$year = $_POST['pc_fyear'];
		$day = $_POST['pc_fday'];
		$city = $_POST['pc_city'];
		$state = $_POST['pc_state'];
		$locations = $_POST['pc_locations'];
		$founder = $_POST['pc_founder'];
				
		//if foreign key is entered
		if ($pc_name != NULL)
		{	
			//confirm that foreign key exists
			$exists = false;
			$sql = "SELECT name FROM Production_company;";
			$results = $conn->query($sql);
			while($row = $results->fetch_assoc()) 		//search through primary keys
			{
				if ($pc_name == $row['name'])				//if primary key is found
				{
					$exists = true;
				}
			}
					
			//if foreign key tuple does not exist create one
			if ($exists == false)
			{	
				//insert data
				$sql = "INSERT INTO Production_company (name, pname, fname, month, day, year, city, state, offices)
				VALUES ('$pc_name','$president','$founder','$month','$day','$year','$city','$state','$locations')";
					
				//report whether operation was successful
				if ($conn->query($sql) === TRUE) {
					echo "<script>alert('New entry recorded.')</script>";
				} else {
					echo "<script>alert('Error: ' . $sql . $conn->error)</script>";
				}
			}
		}
	
	//SCREEN_WRITER
	
		//get input data
		$s_name = $_POST['s_name'];
		$age = $_POST['s_age'];
		$month = $_POST['s_bmonth'];
		$year = $_POST['s_byear'];
		$day = $_POST['s_bday'];
		$sex = $_POST['s_sex'];
			
		//if foreign key is entered
		if ($s_name != NULL)
		{				
			//confirm that foreign key exists
			$exists = false;
			$sql = "SELECT name FROM Screen_writter;";
			$results = $conn->query($sql);
			while($row = $results->fetch_assoc()) 		//search through primary keys
			{
				if ($s_name == $row['name'])				//if primary key is found
				{
					$exists = true;
				}
			}
					
			//if foreign key tuple does not exist create one
			if ($exists == false)
			{			
				//insert data
				$sql = "INSERT INTO Screen_writter (name, age, month, year, day, sex)
				VALUES ('$s_name','$age','$month','$year','$day','$sex')";
					
				//report whether operation was successful
				if ($conn->query($sql) === TRUE) {
					echo "<script>alert('New entry recorded.')</script>";
				} else {
					echo "<script>alert('Error: ' . $sql . $conn->error)</script>";
				}
			}
		}
	
	//finally edit movie table entry
	
	//get input data
	$profit = $_POST['profit'];
	$m_name = $_POST['m_name'];
	$genre = $_POST['genre'];
	$runtime = $_POST['runtime'];
	$cost = $_POST['cost'];
	$score = $_POST['score'];
	
	//confirm that entry exists
	$exists = false;
	$sql = "SELECT name FROM Movie;";
	$results = $conn->query($sql);
	while($row = $results->fetch_assoc()) 		//search through primary keys
	{
		if ($m_name == $row['name'])				//if primary key is found
		{
			$exists = true;
		}
	}
	
	if ($exists == false)
	{
		$conn->close();
		exit("update failed: entry for '$name' was not found.");
	}
	
	//replace any data not entered with what is currently in database
	if ($profit == null)
	{
		$sql = "SELECT profit FROM Movie WHERE name='$m_name'";
		$results = $conn->query($sql);
		$row = $results->fetch_assoc();
		$profit = $row['profit'];
	}
	if ($genre == null)
	{
		$sql = "SELECT genre FROM Movie WHERE name='$m_name'";
		$results = $conn->query($sql);
		$row = $results->fetch_assoc();
		$genre = $row['genre'];
	}
	if ($runtime == null)
	{
		$sql = "SELECT runtime FROM Movie WHERE name='$m_name'";
		$results = $conn->query($sql);
		$row = $results->fetch_assoc();
		$runtime = $row['runtime'];
	}
	if ($cost == null)
	{
		$sql = "SELECT cost FROM Movie WHERE name='$m_name'";
		$results = $conn->query($sql);
		$row = $results->fetch_assoc();
		$cost = $row['cost'];
	}
	if ($d_name == null)
	{
		$sql = "SELECT director FROM Movie WHERE name='$m_name'";
		$results = $conn->query($sql);
		$row = $results->fetch_assoc();
		$d_name = $row['director'];
	}
	if ($p_name == null)
	{
		$sql = "SELECT producer FROM Movie WHERE name='$m_name'";
		$results = $conn->query($sql);
		$row = $results->fetch_assoc();
		$p_name = $row['producer'];
	}
	if ($pc_name == null)
	{
		$sql = "SELECT production_company FROM Movie WHERE name='$m_name'";
		$results = $conn->query($sql);
		$row = $results->fetch_assoc();
		$pc_name = $row['production_company'];
	}
	if ($c_name == null)
	{
		$sql = "SELECT composer FROM Movie WHERE name='$m_name'";
		$results = $conn->query($sql);
		$row = $results->fetch_assoc();
		$c_name = $row['composer'];
	}
	if ($s_name == null)
	{
		$sql = "SELECT screen_writer FROM Movie WHERE name='$m_name'";
		$results = $conn->query($sql);
		$row = $results->fetch_assoc();
		$s_name = $row['screen_writer'];
	}
	if ($a_name == null)
	{
		$sql = "SELECT actor FROM Movie WHERE name='$m_name'";
		$results = $conn->query($sql);
		$row = $results->fetch_assoc();
		$a_name = $row['actor'];
	}
	if ($s_name == null)
	{
		$sql = "SELECT studio FROM Movie WHERE name='$m_name'";
		$results = $conn->query($sql);
		$row = $results->fetch_assoc();
		$s_name = $row['studio'];
	}
	if ($score == null)
	{
		$sql = "SELECT score FROM Movie WHERE name='$m_name'";
		$results = $conn->query($sql);
		$row = $results->fetch_assoc();
		$score = $row['score'];
	}
	
	//update data
	$sql = "UPDATE Movie
		SET profit= '$profit', genre='$genre', runtime='$runtime', cost='$cost', director='$d_name', producer='$p_name', 
			production_company= '$pc_name', composer='$c_name', screen_writer='$s_name', actor='$a_name', studio='$s_name', score='$score'
		WHERE name='$m_name'";
		
	//report whether operation was successful
	if ($conn->query($sql) === TRUE) {
		echo "<script>alert('Entry updated.')</script>";
	} else {
		echo "<script>alert('Error: ' . $sql . $conn->error)</script>";
	}
  }
?>

<script>
var myDropdown = document.getElementById('myDropdown');
var myDropdown2 = document.getElementById('myDropdown2');
var myDropdown3 = document.getElementById('myDropdown3');

function myFunction() {
    myDropdown.classList.toggle('show');  
}

function myFunction2() {
    myDropdown2.classList.toggle('show');
}

function myFunction3() {
    myDropdown3.classList.toggle('show');
}

window.onclick = function(e) {

  	if (e.target.matches('.dropbtn')) {
	  	if (myDropdown2.classList.contains('show')) {
	        myDropdown2.classList.remove('show');
	    	}
	    if (myDropdown3.classList.contains('show')) {
	        myDropdown3.classList.remove('show');
	    	}
    }

    else if(e.target.matches('.dropbtn2'))
  	{
  		if (myDropdown.classList.contains('show')) {
        myDropdown.classList.remove('show');
    	}
    	if (myDropdown3.classList.contains('show')) {
        myDropdown3.classList.remove('show');
    	}
    }

    else if(e.target.matches('.dropbtn3'))
  	{
  		if (myDropdown.classList.contains('show')) {
        myDropdown.classList.remove('show');
    	}
    	if (myDropdown2.classList.contains('show')) {
        myDropdown2.classList.remove('show');
    	}
    }

  	else if (!(e.target.matches('.dropbtn3')) && !(e.target.matches('.dropbtn2')) && !(e.target.matches('.dropbtn')))
  	{
      if (myDropdown.classList.contains('show')) {
        myDropdown.classList.remove('show');
    	}
      if (myDropdown2.classList.contains('show')) {
        myDropdown2.classList.remove('show');
    	}
      if (myDropdown3.classList.contains('show')) {
        myDropdown3.classList.remove('show');
    	}
    }
}
</script>
</body>
</html>
	
	
	
	
	