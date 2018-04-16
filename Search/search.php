<?php
 session_start();
// check user login
if(empty($_SESSION['user_id']))
{
    header("Location: index.php");
}
error_reporting(E_ALL & ~E_NOTICE);
?>
<!DOCTYPE html>

<html>
<head>
    <title> Search Results </title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel ="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
	table{
		border-collapse: collapse;
	}
	
	th, td {
		border: 1px solid #ddd;
		padding: 8px;
		text-align: center;
	}

	td {
		color: #2f2f2f;
	}
	tr:nth-child(even) {
		background-color: #f2f2f2;
	}
	tr:nth-child(odd){
		background-color: #d1d1d1;
	}
    
	tr:hover {
		background-color: #ddd;
	}
	
	th{
		padding-top: 12px;
		padding-bottom: 12px;
		text-align: center;
		background-color: #97D700;
		color: white;
	}
	
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
      <a href="../Edit/editMovie.php">Movie</a>
      <a href="../Edit/editActor.php">Actor</a>
      <a href="../Edit/editStudio.php">Studio</a>
      <a href="../Edit/editComposer.php">Composer</a>
      <a href="../Edit/editTheater.php">Theater</a>
      <a href="../Edit/editProducer.php">Producer</a>
      <a href="../Edit/editProdutionCompany.php">Production Company</a>
      <a href="../Edit/editScreenWriter.php">Screen Writer</a>
      <a href="../Edit/editCritic.php">Critic</a>
      <a href="../Edit/editDirector.php">Director</a>
    </div>
  </div> 
  <div class="search-container">
    <form action="./search.php" method="post">
      <input type="text" placeholder="Search..." name="search">
        <button type = "submit"><i class="fa fa-search"></i></button>
    </form>
  </div>
</div>

<p style="float:right"><a href="./advancedSearch.php">Advanced Search</a></p>
 
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

<?PHP
error_reporting(E_ALL & ~E_NOTICE);
/*
	This is the code for the search functions. In general what this code
	does is take the user's input from the search box (which is actually a
	form field) and uses that input in the where statement of a series of
	SQL statements. 
	
	All of these results are stored seperately initially, after which they
	are combined into one massive array once the results from all of the SQL
	statements are in and any repeat entries are removed. At this point, we
	go back through the array entries and give them scores based on how
	'relevant' the result is. Different categories of information have different
	weights based on typical relevance. For example, the name of a person on a
	match may be worth 50 points, but if it matches a comment from a review it'd
	be scored as a 1. The method of scoring is different for each type of table
	in the database, so each one will need to be coded uniquely. Once a score 
	has been determined, that value and it's corresponding array (which will be
	a single row from the SQL result) will be assigned to a Result object and
	be merged with an array of Results objects.
	
	This above process is repeated until we've gone through all of the tables
	in the database. 
	
	Once the Results array is done generating, we sort based off of the weight
	assigned to it, so array results with high weight will bubble to the top. 
	
	From there, the results are outputed to the web page, making for a hopefully
	helpful search.
	
	The advanced search uses the same code, but the difference here is in how the
	FORM is designed. When we do this process of going through all the tables, the
	very first thing we look at is to see if the exclusion tag for that table is
	null. If it is, we proceed as normal. The FORM for the advanced search will 
	provide a list of clickable 'exclude' tags, that if checked when the form is
	submitted, will assign a value to that specific exclusion tag (therefore making
	the value no longer null). The general form (the standard search box) always
	leaves the tags null. 
	
	The above may change depending on what's most efficient, since my knowledge in
	HTML and PHP is fairly novice level.
*/
class Result
{
	private $weight;
	private $data;
	private $type;
	
	public function __construct($weight, $data, $type)
	{
		/*
			weight is the assigned weight of this object to help organize search results by relevance.
			data is the tuple for individual rows obtained from query results.
			type tells us which table the result came from, eg. Movie, Director, etc.
		*/
		$this->weight = $weight;
		$this->data = $data;
		$this->type = $type;
	}
	public function print_result()
	{
		
		echo "<tr>";
		foreach($this->data as $value)
		{
			echo "<td>".$value."</td>";
		}
		unset($value);
		echo "</tr>";
		
	}
	public function get_weight()
	{
		return $this->weight;
	}
	public function add_weight(int $added_weight)
	{
		$weight+=$added_weight;
	}
	public function get_type()
	{
		return $this->type;
	}
	public function get_data()
	{
		return $this->data;
	}
}

//Finish class definitions, onto support functions

	function IsChecked($value)
	{
		//if we're here, the value is not empty.
		foreach($_POST['exclusion_tag'] as $current_val)
		{
			if($current_val == $value)
				return true;
		}
		return false;
	}
	function search_n_weight_Actors(String $whole_query, $partial_terms, &$partial_results, mysqli &$conn)
	{
		//We string build our query by passing different tests. By the end we should have one
		//unified result since we're using UNION to fuse different results without duplicates
		//I believe.
		$sql = "SELECT * FROM Actors WHERE Name = '".$whole_query."'";
		if(is_numeric($whole_query))
			$sql.= " OR Age = ".intval($whole_query);
		$sql .= " OR Award = '".$whole_query."'";
		$counter = 0;
		if(isset($partial_terms))
		{

			//optional section, we go here if there are potential individual terms to test
			foreach($partial_terms as $term)
			{
				$sql .= " UNION SELECT * FROM Actors WHERE Name LIKE '%".$term."%'";
				if(is_numeric($term))
					$sql.= " OR Age = '".intval($term)."'";
				$sql .= " OR Award LIKE '%".$term."%'";
			}
			unset($term);
		}
		//Once we're here, our SQL statement should be complete.
		$q = $conn->query($sql);
		
		//We don't apply ordering to the results, since they'll be ordered later.
		while($q && $r = mysqli_fetch_row($q))//unsure if this works. Won't highlight.
		{
			//Something WILL match here, because we got a hit from the SQL statement.
			$score = 0;
			if(isset($partial_terms))
			{
				//if this is set we do this mode, as we don't want to score something multiple
				foreach($partial_terms as $term)
				{
					if(strpos($r[0], $term)!== false)
					{
						//got a name match
						$score += 50;
						break;
					}
					if(is_Numeric($term))
					{
						if(intval($term)==$r[1])
						{
							//got an age match.
							$score += 2;
							break;
						}
					}
					if(strpos($r[6], $term)!==false)
					{
						//match on award
						$score += 10;
						break;
					}
				}
			}
			else
			{
				//if the result exists, then it's a match on one of these specifically. 
				//If the name doesn't match, and it's not a number, it's an award match.
				if(strpos($r[0], $whole_query)!==false)
				{
					$score+=50;
				}
				elseif(is_numeric($whole_query))
					$score+=2;
				else
					$score+=10;
			}
			//create a new result object
			//merge it with the array of result objects.
			$partial_results[0][$counter] = new Result($score, $r, "Actors");
			$counter++;
		}
	}
	function search_n_weight_Composer(String $whole_query, $partial_terms, &$partial_results, mysqli &$conn)
	{
		//similar to search_weight_Actors.
		//weights are...
		/*
		name = 50
		Age = 2
		Award (contains) = 10
		*/
		$counter = 0;
		$sql = "SELECT * FROM Composer WHERE Name = '".$whole_query."'";
		if(is_numeric($whole_query))
			$sql.= " OR Age = ".$whole_query;
		$sql .= " OR Award = '".$whole_query."'";
				
		if(isset($partial_terms))
		{
			//optional section, we go here if there are potential individual terms to test
			foreach($partial_terms as $term)
			{
				$sql .= " UNION SELECT * FROM Composer WHERE Name LIKE '%".$term."%'";
				if(is_numeric($term))
					$sql.= "OR Age = ".$term;//not required to do this, as it becomes a string anyways
				$sql .= " OR Award LIKE '%".$term."%'";
			}
			unset($term);
		}
		//Once we're here, our SQL statement should be complete.
		$q = $conn->query($sql);
		
		//We don't apply ordering to the results, since they'll be ordered later.
		while($q && $r = mysqli_fetch_row($q))//unsure if this works. Won't highlight.
		{
			//Something WILL match here, because we got a hit from the SQL statement.
			$score = 0;
			if(isset($partial_terms))
			{
				//if this is set we do this mode, as we don't want to score something multiple
				foreach($partial_terms as $term)
				{
					if(strpos($r[0], $term)!== false)
					{
						//got a name match
						$score += 50;
						break;
					}
					if(is_Numeric($term))
					{
						if(intval($term)==$r[1])
						{
							//got an age match.
							$score += 2;
							break;
						}
					}
					if(strpos($r[5], $term)!==false)
					{	
						$score += 10;
						break;
					}
				}
			}
			else
			{
				//if the result exists, then it's a match on one of these specifically. 
				//If the name doesn't match, and it's not a number, it's an award match.
				if(strpos($r[0], $whole_query)!==false)
					$score+=50;
				elseif(is_numeric($whole_query))
					$score+=2;
				else
					$score+=10;
			}
			$partial_results[1][$counter] = new Result($score, $r, "Composer");
			$counter++;
		}
	}	
	function search_n_weight_Critic(String $whole_query, $partial_terms, &$partial_results, mysqli &$conn)
	{
		/*	again, similar to the first one.
			Weights are:
			- Name = 50 points
			- Age = 2 points
			- Movies reviewed = 10
			likely won't match to anything, but if we do, should be worth something
		*/
		$counter = 0;
		$sql = "SELECT * FROM Critic WHERE Name = '".$whole_query."'";
		if(is_numeric($whole_query))
			$sql.= " OR Age = ".$whole_query." OR Movies_reviewed = ".$whole_query;
		
		if(isset($partial_terms))
		{
			//optional section, we go here if there are potential individual terms to test
			foreach($partial_terms as $term)
			{
				$sql .= " UNION SELECT * FROM Critic WHERE Name LIKE '%".$term."%'";
				if(is_numeric($term))
					$sql.= " OR Age = '".$term."' OR Movies_reviewed = '".$term."'";//not required to do this, as it becomes a string anyways
			}
			unset($term);
		}
		//Once we're here, our SQL statement should be complete.
		$q = $conn->query($sql);
		
		//We don't apply ordering to the results, since they'll be ordered later.
		while($q && $r = mysqli_fetch_row($q))//unsure if this works. Won't highlight.
		{
			//Something WILL match here, because we got a hit from the SQL statement.
			$score = 0;
			if(isset($partial_terms))
			{
				//if this is set we do this mode, as we don't want to score something multiple
				foreach($partial_terms as $term)
				{
					if(strpos($r[0], $term)!== false)
					{
						//got a name match
						$score += 50;
						break;
					}
					if(is_Numeric($term))
					{
						if(intval($term)==$r[1])
						{
							//got an age match.
							$score += 2;
							break;
						}
						if(intval($term)==$r[5])
						{
							$score +=10;
							break;
						}
					}
					
				}
			}
			else
			{
				//if the result exists, then it's a match on one of these specifically. 
				//If the name doesn't match, and it's not a number, it's an award match.
				if(strpos($r[0], $whole_query)!==false)
					$score+=50;
				else
				{
					//if it exists in the results and we didn't match the name, then we
					//must've matched one of the int fields.
					if(intval($whole_query)==$r[1])
						$score+=2;
					else
						$score+=10;
				}
			}
			
			$partial_results[2][$counter] = new Result($score, $r, "Critic");
			$counter++;
		}
	}
	function search_n_weight_Director(String $whole_query, $partial_terms, &$partial_results, mysqli &$conn)
	{
		$counter = 0;
		//Same structure as Actor, with the same weights.
		$sql = "SELECT * FROM Director WHERE Name = '".$whole_query."'";
		if(is_numeric($whole_query))
			$sql.= " OR Age = '".$whole_query."'";
		$sql .= " OR Award = '".$whole_query."'";
		
		if(isset($partial_terms))
		{
			//optional section, we go here if there are potential individual terms to test
			foreach($partial_terms as $term)
			{
				$sql .= " UNION SELECT * FROM Director WHERE Name LIKE '%".$term."%'";
				if(is_numeric($term))
					$sql.= "OR Age = ".intval($term);//not required to do this, as it becomes a string anyways
				$sql .= " OR Award LIKE '%".$term."%'";
			}
			unset($term);
		}
		//Once we're here, our SQL statement should be complete.
		$q = $conn->query($sql);
		
		
		//We don't apply ordering to the results, since they'll be ordered later.
		while($q && $r = mysqli_fetch_row($q))//unsure if this works. Won't highlight.
		{
			
			//Something WILL match here, because we got a hit from the SQL statement.
			$score = 0;
			if(isset($partial_terms))
			{
				//if this is set we do this mode, as we don't want to score something multiple
				foreach($partial_terms as $term)
				{
					if(strpos($r[0], $term)!== false)
					{
						//got a name match
						$score += 50;
						break;
					}
					if(is_Numeric($term))
					{
						if(intval($term)==$r[1])
						{
							//got an age match.
							$score += 2;
							break;
						}
					}
					if(strpos($r[5], $term)!==false)
					{	
						$score += 10;
						break;
					}
				}
			}
			else
			{
				//if the result exists, then it's a match on one of these specifically. 
				//If the name doesn't match, and it's not a number, it's an award match.
				if(strpos($r[0], $whole_query)!==false)
					$score+=50;
				elseif(is_numeric($whole_query))
					$score+=2;
				else
					$score+=10;
			}
			
			$current_result = new Result($score, $r, "Director");
			
			$partial_results[3][$counter] = $current_result;
			$counter++;
		}
	}
	function search_n_weight_Movie(String $whole_query, $partial_terms, &$partial_results, mysqli &$conn)
	{
		/*
			Name = 50
			Profit = 10
			Genre = 20 (might implement special rules to exclude a match in genre if there's a match in name first)
			Runtime and Cost = 5 points each
			Director = 20 points
			Producer = 20 points
			Production Company = 20 points
			Composer = 20 points
			Screen Writer = 20 points
			Actor = 20 points
			Studio = 20 points
			Score = 5 points
		*/
		$counter = 0;
		$sql = "SELECT * FROM Movie WHERE Name = '".$whole_query."' OR Genre = '".$whole_query."' OR Director = '".$whole_query."' OR Producer = '".$whole_query."' OR Production_company = '".$whole_query."' OR Composer = '".$whole_query."' OR Screen_writer = '".$whole_query."' OR Actor = '".$whole_query."' OR Studio = '".$whole_query."'";
		if(is_numeric($whole_query))
			$sql.= " OR Profit = '".$whole_query."' OR Runtime = '".$whole_query."' OR Cost = '".$whole_query."' OR Score = '".$whole_query."'";
		
		if(isset($partial_terms))
		{
			//optional section, we go here if there are potential individual terms to test
			//RECURSE
			foreach($partial_terms as $term)
			{
				$sql .= "UNION SELECT * FROM Movie WHERE Name LIKE '%".$term."%' OR Genre LIKE '%".$term."%' OR Director LIKE '%".$term."%' OR Producer LIKE '%".$term."%' OR Production_company LIKE '%".$term."%' OR Composer LIKE '%".$term."%' OR Screen_writer LIKE '%".$term."%' OR Actor LIKE '%".$term."%' OR Studio LIKE '%".$term."%'";
				if(is_numeric($term))
					$sql.= " OR Profit = '".$term."' OR Runtime = '".$term."' OR Cost = '".$term."' OR Score = '".$term."'";
			}
			unset($term);
		}
		//Once we're here, our SQL statement should be complete.
		$q = $conn->query($sql);
		
		//We don't apply ordering to the results, since they'll be ordered later.
		while($q && $r = mysqli_fetch_row($q))//unsure if this works. Won't highlight.
		{
			//Something WILL match here, because we got a hit from the SQL statement.
			$score = 0;
			if(isset($partial_terms))
			{
				//if this is set we do this mode, as we don't want to score something multiple
				foreach($partial_terms as $term)
				{
					if(strpos($r[0], $term)!== false)
					{
						//got a name match
						$score += 50;
						break;
					}
					elseif((strpos($r[2], $term)!==false)||(strpos($r[5], $term)!==false)||(strpos($r[6], $term)!==false)||(strpos($r[7], $term)!==false)||(strpos($r[8], $term)!==false)||(strpos($r[9], $term)!==false)||(strpos($r[10], $term)!==false)||(strpos($r[11], $term)!==false))
					{
						$score += 20;
						break;
					}
					elseif(is_Numeric($term))
					{
						if($r[1]==intval($term))
						{
							$score+=10;
							break;
						}
						elseif(($r[3]==intval($term))||($r[4]==intval($term))||($r[12]==intval($term)))
						{
							$score+=5;
							break;
						}
					}
				}
			}
			else
			{
				//if the result exists, then it's a match on one of these specifically. 
				//If the name doesn't match, and it's not a number, it's an award match.
				if(strpos($r[0], $whole_query)!== false)
				{
					//got a name match
					$score += 50;
				}
				elseif((strpos($r[2], $whole_query)!==false)||(strpos($r[5], $whole_query)!==false)||(strpos($r[6], $whole_query)!==false)||(strpos($r[7], $whole_query)!==false)||(strpos($r[8], $whole_query)!==false)||(strpos($r[9], $whole_query)!==false)||(strpos($r[10], $whole_query)!==false)||(strpos($r[11], $whole_query)!==false))
				{
					$score += 20;
				}
				elseif(is_Numeric($whole_query))
				{
					if($r[1]==intval($whole_query))
					{
						$score+=10;
					}
					elseif(($r[3]==intval($whole_query))||($r[4]==intval($whole_query))||($r[12]==intval($whole_query)))
					{
						$score+=5;
					}
				}		
			}
			$partial_results[4][$counter] = new Result($score, $r, "Movie");
			$counter++;
		}
	}
	function search_n_weight_Producer(String $whole_query, $partial_terms, array &$partial_results, mysqli &$conn)
	{
		/*
			Same structure as actor and director
		*/
		$counter = 0;
		$sql = "SELECT * FROM Producer WHERE Name = '".$whole_query."'";
		if(is_numeric($whole_query))
			$sql.= " OR Age = '".intval($whole_query)."'";
		$sql .= " OR Award = '".$whole_query."'";
		
		if(isset($partial_terms))
		{
			//optional section, we go here if there are potential individual terms to test
			foreach($partial_terms as $term)
			{
				$sql .= " UNION SELECT * FROM Producer WHERE Name LIKE '%".$term."%'";
				if(is_numeric($term))
					$sql.= " OR Age = '".intval($term)."'";//not required to do this, as it becomes a string anyways
				$sql .= " OR Award LIKE '%".$term."%'";
			}
			unset($term);
		}
		//Once we're here, our SQL statement should be complete.
		$q = $conn->query($sql);
		
		//We don't apply ordering to the results, since they'll be ordered later.
		while($q && $r = mysqli_fetch_row($q))//unsure if this works. Won't highlight.
		{
			//Something WILL match here, because we got a hit from the SQL statement.
			$score = 0;
			if(isset($partial_terms))
			{
				//if this is set we do this mode, as we don't want to score something multiple
				foreach($partial_terms as $term)
				{
					if(strpos($r[0], $term)!== false)
					{
						//got a name match
						$score += 50;
						break;
					}
					if(is_Numeric($term))
					{
						if(intval($term)==$r[1])
						{
							//got an age match.
							$score += 2;
							break;
						}
					}
					if(strpos($r[5], $term)!==false)
					{	
						$score += 10;
						break;
					}
				}
			}
			else
			{
				//if the result exists, then it's a match on one of these specifically. 
				//If the name doesn't match, and it's not a number, it's an award match.
				if(strpos($r[0], $whole_query)!==false)
					$score+=50;
				elseif(is_numeric($whole_query))
					$score+=2;
				else
					$score+=10;
			}
			$partial_results[5][$counter] = new Result($score, $r, "Producer");
			$counter++;
		}
	}
	function search_n_weight_Prod_Comp(String $whole_query, $partial_terms, &$partial_results, mysqli &$conn)
	{
		/*
			Name = 50
			Pname = 25
			Fname = 25
			City = 20 points
			State = 10 points
			Offices = NR
		*/
		$counter = 0;
		$sql = "SELECT * FROM Production_company WHERE Name = '".$whole_query."' OR Pname = '".$whole_query."' OR Fname = '".$whole_query."' OR City = '".$whole_query."' OR State = '".$whole_query."'";
		
		if(isset($partial_terms))
		{
			//optional section, we go here if there are potential individual terms to test
			foreach($partial_terms as $term)
				$sql .= " UNION SELECT * FROM Production_company WHERE Name LIKE '%".$term."%' OR Pname LIKE '%".$term."%' OR Fname LIKE '%".$term."%' OR City LIKE '%".$term."%' OR States LIKE '%".$term."%'";
		}
		unset($term);
		//Once we're here, our SQL statement should be complete.
		$q = $conn->query($sql);
		
		//We don't apply ordering to the results, since they'll be ordered later.
		while($q && $r = mysqli_fetch_row($q))//unsure if this works. Won't highlight.
		{
			//Something WILL match here, because we got a hit from the SQL statement.
			$score = 0;
			if(isset($partial_terms))
			{
				//if this is set we do this mode, as we don't want to score something multiple
				foreach($partial_terms as $term)
				{
					if(strpos($r[0], $term)!== false)
					{
						//got a name match
						$score += 50;
						break;
					}
					elseif(strpos($r[1], $term)!== false)
					{
						$score+=25;
						break;
					}
					elseif(strpos($r[2], $term)!==false)
					{	
						$score += 25;
						break;
					}
					elseif(strpos($r[6], $term)!== false)
					{
						$score += 20;
						break;
					}
					elseif(strpos($r[7], $term)!== false)
					{
						$score += 10;
						break;
					}
				}
			}
			else
			{
				//if the result exists, then it's a match on one of these specifically. 
				//If the name doesn't match, and it's not a number, it's an award match.
				if(strpos($r[0], $whole_query)!== false)
				{
					//got a name match
					$score += 50;
				}
				elseif(strpos($r[1], $whole_query)!== false)
				{
					$score+=25;
				}
				elseif(strpos($r[2], $whole_query)!==false)
				{	
					$score += 25;
				}
				elseif(strpos($r[6], $whole_query)!== false)
				{
					$score += 20;
				}
				elseif(strpos($r[7], $whole_query)!== false)
				{
					$score += 10;
				}
			}
			$partial_results[6][$counter] = new Result($score, $r, "Production_company");
			$counter++;
		}
	}
	function search_n_weight_Screen_Writer(String $whole_query, $partial_terms, &$partial_results, mysqli &$conn)
	{
		/*
			Same as previous 'people' attributes, except this one lacks an award category.
			Sorry screen writers, maybe next time.
		*/
		$counter = 0;
		$sql = "SELECT * FROM Screen_writter WHERE Name = '".$whole_query."'";
		if(is_numeric($whole_query))
			$sql.= " OR Age = '".intval($whole_query)."'";
		
		if(isset($partial_terms))
		{
			//optional section, we go here if there are potential individual terms to test
			//RECURSE
			foreach($partial_terms as $term)
			{
				$sql .= " UNION SELECT * FROM Screen_writter WHERE Name LIKE '%".$term."%'";
				if(is_numeric($term))
					$sql.= " OR Age = '".intval($term)."'";//not required to do this, as it becomes a string anyways
			}
			unset($term);
		}
		//Once we're here, our SQL statement should be complete.
		$q = $conn->query($sql);
		
		
		//We don't apply ordering to the results, since they'll be ordered later.
		while($q && $r = mysqli_fetch_row($q))//unsure if this works. Won't highlight.
		{
			//Something WILL match here, because we got a hit from the SQL statement.
			$score = 0;
			if(isset($partial_terms))
			{
				//if this is set we do this mode, as we don't want to score something multiple
				foreach($partial_terms as $term)
				{
					if(strpos($r[0], $term)!== false)
					{
						//got a name match
						$score += 50;
						break;
					}
					if(is_Numeric($term))
					{
						if(intval($term)==$r[1])
						{
							//got an age match.
							$score += 2;
							break;
						}
					}
				}
			}
			else
			{
				//if the result exists, then it's a match on one of these specifically. 
				//If the name doesn't match, and it's not a number, it's an award match.
				if(strpos($r[0], $whole_query)!==false)
					$score+=50;
				else
					$score+=2;
			}
			$partial_results[7][$counter] = new Result($score, $r, "Screen_writter");
			$counter++;
		}
	}
	function search_n_weight_Studio(String $whole_query, $partial_terms, &$partial_results, mysqli &$conn)
	{
		/*
			Name = 50
			Movies Funded = 5
			Set_Locations = 5
			HQ = 20
			Movies Published = 5
			Founder = 15
			Year = 10
			Month = NR
		*/
		$counter = 0;
		$sql = "SELECT * FROM Studio WHERE Name = '".$whole_query."' OR HQ = '".$whole_query."' OR Founder = '".$whole_query."'";
		if(is_numeric($whole_query))
			$sql.= " OR Movies_funded = '".$whole_query."' OR Set_locations = '".$whole_query."' OR Movies_published = '".$whole_query."' OR Year = '".$whole_query."'";
		
		if(isset($partial_terms))
		{
			//optional section, we go here if there are potential individual terms to test
			foreach($partial_terms as $term)
			{
				$sql .= " UNION SELECT * FROM Studio WHERE Name LIKE '%".$term."%' OR HQ LIKE '%".$term."%' OR Founder LIKE '%".$term."%'";
				if(is_numeric($whole_query))
					$sql.= " OR Movies_funded = '".$term."' OR Set_locations = '".$term."' OR Movies_published = '".$term."' OR Year = '".$term."'";
			}
			unset($term);
		}
		//Once we're here, our SQL statement should be complete.
		$q = $conn->query($sql);
		
		
		//We don't apply ordering to the results, since they'll be ordered later.
		while($q && $r = mysqli_fetch_row($q))//unsure if this works. Won't highlight.
		{
			//Something WILL match here, because we got a hit from the SQL statement.
			$score = 0;
			if(isset($partial_terms))
			{
				//if this is set we do this mode, as we don't want to score something multiple
				foreach($partial_terms as $term)
				{
					if(strpos($r[0], $term)!== false)
					{
						$score += 50;
						break;
					}
					elseif(strpos($r[3], $term)!==false)
					{
						$score +=20;
						break;
					}
					elseif(strpos($r[5], $term)!==false)
					{
						$score +=15;
						break;
					}
					if(is_Numeric($term))
					{
						if(intval($term)==$r[7])
						{
							//got a year match.
							$score += 10;
							break;
						}
						elseif((intval($term)==$r[1])||(intval($term)==$r[2])||(intval($term)==$r[4]))
						{
							//coud be a few things, not worth much though.
							$score +=5;
							break;
						}
					}
				}
			}
			else
			{
				//if the result exists, then it's a match on one of these specifically. 
				//If the name doesn't match, and it's not a number, it's an award match.
				if(strpos($r[0], $whole_query)!==false)
					$score+=50;
				elseif(strpos($r[3], $whole_query)!==false)
					$score+=20;
				elseif(strpos($r[5], $whole_query)!==false)
					$score+=15;
				elseif(is_numeric($whole_query))
				{
					if($r[7]==intval($whole_query))
						$score+=10;
					else
						$score+=5;
				}
			}
			$partial_results[8][$counter] = new Result($score, $r, "Studio");
			$counter++;
		}
		
		
	}
	function search_n_weight_Theater(String $whole_query, $partial_terms, &$partial_results, mysqli &$conn)
	{
		/*
			Name = 50
			Oname = 30
			City = 20
			State = 15
			Size = 10
		*/
		$counter = 0;
		$sql = "SELECT * FROM Theater WHERE Name = '".$whole_query."' OR Oname = '".$whole_query."' OR City = '".$whole_query."' OR State = '".$whole_query."'";
		if(is_numeric($whole_query))
			$sql.= " OR Size = '".$whole_query."'";
		
		if(isset($partial_terms))
		{
			//optional section, we go here if there are potential individual terms to test
			foreach($partial_terms as $term)
			{
				$sql .= " UNION SELECT * FROM Theater WHERE Name LIKE '%".$term."%' OR Oname LIKE '%".$term."%' OR City LIKE '%".$term."%' OR State LIKE '%".$term."%'";
				if(is_numeric($whole_query))
					$sql.= " OR Size = '".$term."'";
			}
			unset($term);
		}
		//Once we're here, our SQL statement should be complete.
		$q = $conn->query($sql);
		
		
		//We don't apply ordering to the results, since they'll be ordered later.
		while($q && $r = mysqli_fetch_row($q))//unsure if this works. Won't highlight.
		{
			//Something WILL match here, because we got a hit from the SQL statement.
			$score = 0;
			if(isset($partial_terms))
			{
				//if this is set we do this mode, as we don't want to score something multiple
				foreach($partial_terms as $term)
				{
					if(strpos($r[0], $term)!== false)
					{
						$score += 50;
						break;
					}
					elseif(strpos($r[1], $term)!==false)
					{
						$score +=30;
						break;
					}
					elseif(strpos($r[2], $term)!==false)
					{
						$score +=20;
						break;
					}
					elseif(strpos($r[3], $term)!==false)
					{
						$score +=15;
						break;
					}
					elseif(is_Numeric($term))
					{
						if(intval($term)==$r[4])
						{
							//got a size match.
							$score += 10;
							break;
						}
					}
				}
			}
			else
			{
				//if the result exists, then it's a match on one of these specifically. 
				//If the name doesn't match, and it's not a number, it's an award match.
				if(strpos($r[0], $whole_query)!==false)
					$score+=50;
				elseif(strpos($r[1], $whole_query)!==false)
					$score+=30;
				elseif(strpos($r[2], $whole_query)!==false)
					$score+=20;
				elseif(strpos($r[3], $whole_query)!==false)
					$score+=15;
				else
				{
					//the row exists as a match, so this has to be what matches.
					$score+=10;
				}
			}
			$partial_results[9][$counter] = new Result($score, $r, "Theater");
			$counter++;
		}	
	}
	
//Finish bonus function definitions
//Search Code

//Step 1, grab input from the form and announce variables

	$result_arr = array();
	//we'll be using array_push to merge weighted results.
	$usr_query = $_POST['search'];

	if(count(explode(" ", $usr_query, PHP_INT_MAX)) > 1)
	{
		$ind_query_terms = explode(" ", $usr_query, PHP_INT_MAX);
	}
	else if(count(explode(" ", $usr_query, PHP_INT_MAX)) == 1)
	{
		$ind_query_terms = $_POST;
	}
	
	//connect to database
	$servername = "127.0.0.1";
	$db_username = "cosc471";
	$db_password = "represent satellites drink nobody";
	$db_name   = "COSC471";
	
	$conn = new mysqli($servername, $db_username, $db_password, $db_name);
	
	if ($conn->connect_error)
	{
		//Connection's dead, so nothing to show.
    	die("Connection failed: " . $conn->connect_error);
	}
	else
	{
		//We're connected, so we can perform the necessary SQL queries that'll be coming up shortly.
		if (isset($_POST['exclusion_tag']))
		{
			//if it's set, that means it's safe to check if the tag exists.
			if(!IsChecked('DET'))
				search_n_weight_Director($usr_query, $ind_query_terms, $result_arr, $conn);
			
			//Next is Actor
			if(!IsChecked('AET'))
				search_n_weight_Actors($usr_query, $ind_query_terms, $result_arr, $conn);
		
			//Next is Composer
			if(!IsChecked('COET'))
				search_n_weight_Composer($usr_query, $ind_query_terms, $result_arr, $conn);
			
			//Next is Critic
			if(!IsChecked('CRET'))
				search_n_weight_Critic($usr_query, $ind_query_terms, $result_arr, $conn);
			
			//Next is Producer
			if(!IsChecked('PET'))
				search_n_weight_Producer($usr_query, $ind_query_terms, $result_arr, $conn);
			
			//Next is Screen Writer
			if(!IsChecked('SWET'))
				search_n_weight_Screen_Writer($usr_query, $ind_query_terms, $result_arr, $conn);
			
			//Now time for Movie
			if(!IsChecked('MET'))
				search_n_weight_Movie($usr_query, $ind_query_terms, $result_arr, $conn);
			
			//Can't forget the Production Company
			if(!IsChecked('PCET'))
				search_n_weight_Prod_Comp($usr_query, $ind_query_terms, $result_arr, $conn);
			
			//The most important place, the Studio
			if(!IsChecked('SET'))
				search_n_weight_Studio($usr_query, $ind_query_terms, $result_arr, $conn);
			
			//Finally we check the theaters.
			if(!IsChecked('TET'))
				search_n_weight_Theater($usr_query, $ind_query_terms, $result_arr, $conn);
		}
		else
		{
			//This is where we usually end up, since general search includes no tags.
			//Even if the code's longer, execution time here is faster since there aren'table
			//as many checks.
			
			search_n_weight_Director($usr_query, $ind_query_terms, $result_arr, $conn);
			search_n_weight_Actors($usr_query, $ind_query_terms, $result_arr, $conn);
			search_n_weight_Composer($usr_query, $ind_query_terms, $result_arr, $conn);
			search_n_weight_Critic($usr_query, $ind_query_terms, $result_arr, $conn);
			search_n_weight_Producer($usr_query, $ind_query_terms, $result_arr, $conn);
			search_n_weight_Screen_Writer($usr_query, $ind_query_terms, $result_arr, $conn);
			search_n_weight_Movie($usr_query, $ind_query_terms, $result_arr, $conn);
			search_n_weight_Prod_Comp($usr_query, $ind_query_terms, $result_arr, $conn);
			search_n_weight_Studio($usr_query, $ind_query_terms, $result_arr, $conn);
			search_n_weight_Theater($usr_query, $ind_query_terms, $result_arr, $conn);
		}
		
		//Down here, we perform the final weighing and result checking
		//AwfulSort($result_arr);//supply the old array. It gets sorted, so it should be ready to print.
		
		function comp($a, $b)
		{
			return $a->get_weight() - $b->get_weight();
		}

		for($i = 0; $i < 10; $i++)
		{
			if(is_object($result_arr[$i]))
			{
				usort($result_arr[$i], 'comp');
			}
		}
		
		//print the array
		//AwfulSort2($result_arr);
		//results are printed out to the page.
		echo "<br/>";
		$lengths = array_map('count', $result_arr);

		for($k = 0; $k < 10; $k++)
		{
			if(is_object(($result_arr[$k][0])))
			{
				$tableName = $result_arr[$k][0]->get_type();
				echo "<br/><br/>"; //line break for tidyness.
				echo "<table align='center' width='50%'><tr>";
				echo "<caption>".$tableName."</caption>";
				$sql = "SHOW columns FROM ".$tableName;
				$result = mysqli_query($conn, $sql);
				while($row = mysqli_fetch_array($result))
				{
					echo "<th>".$row['Field']."</th>";
				}
				echo "</tr>";

				for($i=0; $i<$lengths[$k]; $i++)
				{
					if(is_object(($result_arr[$k][$i])) == "Result")
					{
						$result_arr[$k][$i]->print_result();
					}
				}
				echo "</table>";
			}
			else
			{
				continue;
			}
		}
		
	}
?>

</body>
</html>
