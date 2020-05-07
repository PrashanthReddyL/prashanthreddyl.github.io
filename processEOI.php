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

	function sanitise_input($data) //function to sanitise the input data
	{
		$data = trim($data); //removes leading and trailing spaces
		$data = stripslashes($data);//removes backslashes
		$data = htmlspecialchars($data);//removes html special characters
		return $data;//returns validated data
	}

if(!isset($_SERVER['HTTP_REFERER']))
{
     header('location:../assign3/index.php');  //redirects the user to index.php if the user tries to access procesEOI.php directly from browser.
	 exit;									
}	
	require_once("settings.php");
	$conn = @mysqli_connect($host, $user, $pwd, $sql_db);
	if(!$conn){
		echo "<p>Database Connection Failure</p>";
	}else
	{
		$JobReferenceNumber = trim($_POST["JobReferenceNumber"]);		
		
		if (isset ($_POST["FirstName"])) {
			$FirstName = $_POST["FirstName"];
			$FirstName = sanitise_input($FirstName);
			$err_msg = ""; // set the message to have no value
			if (!preg_match("/^[a-zA-Z ]*$/",$FirstName)) {
				$err_msg .= "<p> Other than Alpha Characters will not stored for First name.</p>";
			if ($err_msg == "") { // Proceed if nothing is wrong			
			} 
			else { // Display error message
			echo $err_msg; }
			}
		}
	
		
		if (isset ($_POST["LastName"])) {
			$LastName = $_POST["LastName"];
			$LastName = sanitise_input($LastName);
			$err_msg = ""; // set the message to have no value
			if (!preg_match("/^[a-zA-Z ]*$/",$LastName)) {
				$err_msg .= "<p> Other than Alpha Characters will not stored for Last name.</p>";
			if ($err_msg == "") { // Proceed if nothing is wrong			
			} 
			else { // Display error message
			echo $err_msg; }
			}
		}
		
		$DateofBirth= sanitise_input($_POST["DateofBirth"]);
		$Gender= trim($_POST["Gender"]);		
		$Address= sanitise_input($_POST["Address"]);
		$Suburb= sanitise_input($_POST["Suburb"]);
		$State= sanitise_input($_POST["State"]);
		$PostCode= sanitise_input($_POST["PostCode"]);
		$Email= sanitise_input($_POST["Email"]);
		$PhNumber= sanitise_input($_POST["PhNumber"]);
		$Skill1= sanitise_input($_POST["Skill1"]);
		$Skill2= sanitise_input($_POST["Skill2"]);
		$Skill3= sanitise_input($_POST["Skill3"]);
		$Skill4= sanitise_input($_POST["Skill4"]);
		$Skill5= sanitise_input($_POST["Skill5"]);
		$Skill6= sanitise_input($_POST["Skill6"]);
		$Skill7= sanitise_input($_POST["Skill7"]);
		$Otherskills= sanitise_input($_POST["Otherskills"]);
		$otherskillsarea= sanitise_input($_POST["otherskillsarea"]);
		
					
		$sql_table = "eoi";
		$query = "insert into $sql_table(JobReferenceNumber, FirstName, LastName, DateofBirth, Gender, Address, Suburb, State, PostCode, Email, PhNumber, Skill1, Skill2, Skill3, Skill4, Skill5, Skill6, Skill7, Otherskills, otherskillsarea) 
					values ('$JobReferenceNumber','$FirstName','$LastName','$DateofBirth', '$Gender', '$Address', '$Suburb', '$State', '$PostCode', '$Email', '$PhNumber', '$Skill1', '$Skill2', '$Skill3', '$Skill4', '$Skill5', '$Skill6', '$Skill7','$Otherskills', '$otherskillsarea')";
		$result = mysqli_query($conn, $query);
		
		$query2 = "SELECT max(EOInumber) FROM eoi";
		$result2 = mysqli_query($conn, $query2);
		if(!$result){
			echo "<p class = \"wrong\">Something is wrong with ", $query, "</p>";
		}else{
			echo "<p class = \"ok\">Thank you for submitting your Application.</p>";
		}
			mysqli_close($conn);
		}
	
		?>
		<!--button to display the Application ID number-->
		<form id = "confirmID" action = "confirm_id.php" method = "post"> 
				<p>Click here to view your Application ID  </p>  
				<button type="submit" id="displaybutton" >Application ID</button>
    
		</form> 
</body>
</html>
	

