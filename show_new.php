<!DOCTYPE html>
<html lang = "en">

<head>
  <meta charset="utf-8" />
  <meta name="description" content="Manager page" />
  <meta name="keywords" content="HTML5" />
  <meta name="author" content="Prashanth Reddy"  />
  <link rel="stylesheet" type="text/css" href="styles/style.css">  
  <script src="scripts/apply.js"></script>
<title>Enhancements3</title>
</head>

<body>
<?php include_once 'Header.inc';

	require_once("settings.php");
	$conn = @mysqli_connect($host, $user, $pwd, $sql_db);
	if(!$conn){
		echo "<p>Database Connection Failure</p>";
	}else
	{
		$sql_table = "eoi";
		$query = "select * FROM eoi where Status like 'New'";//sql query to display all the jobs with status as new
		$result = mysqli_query($conn, $query);
		if(!$result){
			echo "<p>Something is wrong with ", $query, "</p>";
		}else{
			echo "<table border =\"2\">\n";
			echo "<tr>\n"
			."<th scope =\"col\">EOInumber</th>\n"
			."<th scope =\"col\">JobReferenceNumber</th>\n"
			."<th scope =\"col\">FirstName</th>\n"
			."<th scope =\"col\">LastName</th>\n"
			."<th scope =\"col\">DateofBirth</th>\n"
			."<th scope =\"col\">Gender</th>\n"
			."<th scope =\"col\">Address</th>\n"
			."<th scope =\"col\">Suburb</th>\n"
			."<th scope =\"col\">State</th>\n"
			."<th scope =\"col\">PostCode</th>\n"
			."<th scope =\"col\">Email</th>\n"
			."<th scope =\"col\">Skill1</th>\n"
			."<th scope =\"col\">Skill2</th>\n"
			."<th scope =\"col\">Skill3</th>\n"
			."<th scope =\"col\">Skill4</th>\n"
			."<th scope =\"col\">Skill5</th>\n"
			."<th scope =\"col\">Skill6</th>\n"
			."<th scope =\"col\">Skill7</th>\n"
			."<th scope =\"col\">Otherskills</th>\n"
			."<th scope =\"col\">otherskillsarea</th>\n"
			."<th scope =\"col\">Status</th>\n"
			."</tr>\n";
			
			while ($row = mysqli_fetch_assoc($result)){
				echo "<tr>\n";
				echo "<td>",$row["EOInumber"],"</td>\n";
				echo "<td>",$row["JobReferenceNumber"],"</td>\n";
				echo "<td>",$row["FirstName"],"</td>\n";
				echo "<td>",$row["LastName"],"</td>\n";
				echo "<td>",$row["DateofBirth"],"</td>\n";
				echo "<td>",$row["Gender"],"</td>\n";
				echo "<td>",$row["Address"],"</td>\n";
				echo "<td>",$row["Suburb"],"</td>\n";
				echo "<td>",$row["State"],"</td>\n";
				echo "<td>",$row["PostCode"],"</td>\n";
				echo "<td>",$row["Email"],"</td>\n";
				echo "<td>",$row["Skill1"],"</td>\n";
				echo "<td>",$row["Skill2"],"</td>\n";
				echo "<td>",$row["Skill3"],"</td>\n";
				echo "<td>",$row["Skill4"],"</td>\n";
				echo "<td>",$row["Skill5"],"</td>\n";
				echo "<td>",$row["Skill6"],"</td>\n";
				echo "<td>",$row["Skill7"],"</td>\n";
				echo "<td>",$row["Otherskills"],"</td>\n";
				echo "<td>",$row["otherskillsarea"],"</td>\n";
				echo "<td>",$row["Status"],"</td>\n";				
				echo "</tr>\n";
			}
			echo "</table>\n";
			//mysql_free_result($result);
				
			}
			mysqli_close($conn);
		}
		?>
		</body>
		</html>
	