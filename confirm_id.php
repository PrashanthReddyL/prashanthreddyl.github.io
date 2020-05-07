<!DOCTYPE html>
<html lang = "en">

<head>
  <meta charset="utf-8" />
  <meta name="description" content="Confirmation page" />
  <meta name="keywords" content="HTML5" />
  <meta name="author" content="Prashanth Reddy"  />
  <link rel="stylesheet" type="text/css" href="styles/style.css">  
  <script src=""></script>
<title>Confirm</title>
</head>

<body>
<?php include_once 'Header.inc';

 //to establish the connection to database
require_once("settings.php"); //uses the file settings.php
	$conn = @mysqli_connect($host, $user, $pwd, $sql_db); //
	if(!$conn){
		echo "<p>Database Connection Failure</p>"; //if there is any connection failure, an error message is displayed.
	}else
	{
		$sql_table = "eoi";		
		$query = "select max(EOInumber) FROM eoi" ; //sql query to retrive the latest entered record
		$result = mysqli_query($conn, $query);
		
		
		if(!$result){
			echo "<p>Something is wrong with ", $query, "</p>"; //displays an error if the query is unsuccessful
		}else{
			echo "<p>Your Unique EOInumber is:";
			echo "<table border =\"1\">\n";
			echo "<tr>\n"
			."<th scope =\"col\">EOInumber</th>\n"			//display the EOINumber 
			."</tr>\n";
			
			while ($row = mysqli_fetch_assoc($result)){
				echo "<tr>\n";
				echo "<td>",$row["max(EOInumber)"],"</td>\n";
			
				
				
				echo "</tr>\n";
			}
			echo "</table>\n";
			
				
			}
			mysqli_close($conn); // to close the connection
		}
		?>
	
</body>
</html>