
<!DOCTYPE html>
<html lang = "en">

<head>
  <meta charset="utf-8" />
  <meta name="description" content="Manager page" />
  <meta name="keywords" content="HTML5" />
  <meta name="author" content="Prashanth Reddy"  />
  <link rel="stylesheet" type="text/css" href="styles/style.css">  
  <script src="scripts/apply.js"></script>
<title>Manage</title>
</head>

<body>
<?php include_once 'Header.inc';

//to establish the connection to database
	require_once("settings.php"); //uses the file settings.php
	$conn = @mysqli_connect($host, $user, $pwd, $sql_db);
	if(!$conn){
		echo "<p>Database Connection Failure</p>";
	}else
	{
		$JobReferenceNumber = trim($_POST["JobReferenceNumber"]);
		
		$sql_table = "eoi";
		$query = "DELETE from eoi where JobReferenceNumber = '$JobReferenceNumber'"; //sql query to delete all the records from eoi table for the JobReferenceNumber entered
		$result = mysqli_query($conn, $query);
		if(!$result){
			echo "<p class = \"wrong\">Something is wrong with ", $query, "</p>"; //displays an error if the query is unsuccessful
		}else{
			echo "<p class = \"ok\">Successfully deleted the Applications for the Job Reference Number: $JobReferenceNumber</p>";
			}
			mysqli_close($conn);//close connection
		}
		?>
		</body>
		</html>
	

