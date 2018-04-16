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
	<title>Add Theater</title>
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
      <a href="./addMovie.php">Movie</a>
      <a href="./addActor.php">Actor</a>
      <a href="./addStudio.php">Studio</a>
      <a href="./addComposer.php">Composer</a>
      <a href="./addTheater.php">Theater</a>
      <a href="./addProducer.php">Producer</a>
      <a href="./addProductionCompany.php">Production Company</a>
      <a href="./addScreenWriter.php">Screen Writer</a>
      <a href="./addCritic.php">Critic</a>
      <a href="./addDirector.php">Director</a>
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
      <a href="../Edit/editMovie.php">Movie</a>
      <a href="../Edit/editActor.php">Actor</a>
      <a href="../Edit/editStudio.php">Studio</a>
      <a href="../Edit/editComposer.php">Composer</a>
      <a href="../Edit/editTheater.php">Theater</a>
      <a href="../Edit/editProducer.php">Producer</a>
      <a href="../Edit/editProductionCompany.php">Production Company</a>
      <a href="../Edit/editScreenWriter.php">Screen Writer</a>
      <a href="../Edit/editCritic.php">Critic</a>
      <a href="../Edit/editDirector.php">Director</a>
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

	<h1 class = "name">Add Theater</h1>
	
	<form action="addTheater.php" method="post">

	<div style= "position:absolute; margin-left: 5px; margin-bottom: 5px">
			<p>Theater<br></p>
			<input name = t_name required type = "text" placeholder = "Theater Name"><br>
			<input name = to_name type = "text" placeholder = "Theater Owner Name"><br>
			<input name = t_state type = "text" placeholder = "State"><br>
			<input name = t_city type = "text" placeholder = "City"><br>
			<input name = t_size type = "number" placeholder = "Size (sq ft)"><br>
			<input type = "submit" value = "GO" name = "addTheater" />
			<input type = "reset" value = "Reset"/>
	</div>

	</form>

<?php
  if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['addTheater']))
  {
	//get input data
	$name = $_POST['t_name'];
	$ownername = $_POST['to_name'];
	$state = $_POST['t_state'];
	$city = $_POST['t_city'];
	$size = $_POST['t_size'];

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
			
	//insert data
	$sql = "INSERT INTO Theater(name, oname, city, state, size)
	VALUES ('$name','$ownername','$state','$city','$size')";
		
	//report whether operation was successful
	if ($conn->query($sql) === TRUE) {
		echo "<script>alert('New entry recorded.')</script>";
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
	
	
	
	
	