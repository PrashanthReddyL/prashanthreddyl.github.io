
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
	require_once("settings.php");
	$conn = @mysqli_connect($host, $user, $pwd, $sql_db);
	if(!$conn){
		echo "<p>Database Connection Failure</p>";
	}else
	{
		
		$EOInumber = trim($_POST["EOInumber"]);
		$Status = trim($_POST["Status"]);
		$sql_table = "eoi";
		$query = "UPDATE eoi SET Status = '$Status' WHERE EOInumber = '$EOInumber'";//sql query to update the status os a record by taking EOINumber as input
		$result = mysqli_query($conn, $query);
		if(!$result){
			echo "<p class = \"wrong\">Something is wrong with ", $query, "</p>";
		}else{
			echo "<p class = \"ok\">Successfully Updated the status of the EOI Number: $EOInumber </p>";
			}
			mysqli_close($conn);
		}
		?>
		</body>
		</html>
	

