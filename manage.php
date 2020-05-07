<!DOCTYPE html>
<html lang = "en">

<head>
  <meta charset="utf-8" />
  <meta name="description" content="Manager page" />
  <meta name="keywords" content="HTML5" />
  <meta name="author" content="Prashanth Reddy"  />
  <link rel="stylesheet" type="text/css" href="styles/style.css">  
  <script src="scripts/manage.js"></script>
<title>Manage</title>
</head>

<body>
<?php include_once 'Header.inc'?>
 
 <div class = "managepage">
 
 <form id = "jobsdisplay" action = "jobs_display.php" method = "post"> 
<p> <strong> CLick the button below to List all Job Applications: </strong></p>
  <button type="submit" id="displaybutton" >List all Job Applications</button>
  <p>------------------------------------------------------------------------------------</p>
 </form> 
 
 <form id = "jobssearch" action = "jobs_search.php" method = "post">
 <p> <strong>Search for the Applications of a specific Job </strong></p>
  Job Reference Number: <input type="text" name="JobReferenceNumber" >  
  <button type="submit" id="searchbutton" >Search</button>
  <p>------------------------------------------------------------------------------------</p>  
  
</form> 






<form id = "jobssearchname" action = "jobs_search_name.php" method = "post">
 <p><strong>Search for an Application </strong></p>
  First Name: <input type="text" name="FirstName" > 
  Last Name: <input type="text" name="LastName" >  
  <button type="submit" id="searchnamebutton" >Search</button>  
  <p>------------------------------------------------------------------------------------</p>
</form> 




<form id = "jobsdelete" action = "jobs_delete.php" method = "post">
 <p><strong>Delete an application  </strong></p>
  Job Reference Number: <input type="text" name="JobReferenceNumber" > 
     <button type="submit" id="deletebutton" >Delete</button>
<p>-------------------------------------------------------------------------------------</p>
</form> 


<form id = "updateStatus" action = "update_status.php" method = "post">
 
  <p><strong>Enter the EOI Number and Status of a record to Update the Status </strong></p>
  EOI Number: <input type="text" name="EOInumber" > 
  Status: <input type="text" name="Status" > 
   <button type="submit" id="statusbutton" >Update</button>
    <p>---------------------------------------------------------------------------------</p>
</form> 

</div>




</body>
</html>