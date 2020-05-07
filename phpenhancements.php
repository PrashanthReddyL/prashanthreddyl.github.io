<!DOCTYPE html>
<html lang = "en">

<head>
  <meta charset="utf-8" />
  <meta name="description" content="Manager page" />
  <meta name="keywords" content="HTML5" />
  <meta name="author" content="Prashanth Reddy"  />
  <link rel="stylesheet" type="text/css" href="styles/style.css">  
 
<title>Manage</title>
</head>

<body>
<?php include_once 'Header.inc'?>
 
 <div class = "managepage">
 
 <p><strong>Enhancement 1: show sorted Applications from New to Old</strong></p>
 <p>==========================================================</p>
 
 <form id = "sortjobs" action = "sort_jobs.php" method = "post"> 
<p> <strong> CLick Here to Sort the all Job Applications based on EOI Number (New to Old): </strong></p>
  <button type="submit" id="sortbutton" >Sort all Job Applications</button>
  <p>------------------------------------------------------------------------------------</p>
 </form> 
 
 
 
 
 <p><strong>Enhancement 2: Display Applications Based on its Status:</strong></p>
 <p>==========================================================</p>
 
  <form id = "shownew" action = "show_new.php" method = "post"> 
<p> <strong>Show Jobs with New Status</strong></p>
  <button type="submit" id="showbutton" >Show Jobs with New Status</button>
  <p>------------------------------------------------------------------------------------</p>
 </form> 
  
  <form id = "showcurrent" action = "show_current.php" method = "post"> 
<p> <strong>Show Jobs with Current Status</strong></p>
  <button type="submit" id="showbutton" >Show Jobs with Current Status</button>
  <p>------------------------------------------------------------------------------------</p>
 </form>  
   
  <form id = "showfinal" action = "show_final.php" method = "post"> 
<p> <strong>Show Jobs with Final Status</strong></p>
  <button type="submit" id="showbutton" >Show Jobs with Final Status</button>
  <p>------------------------------------------------------------------------------------</p>
 </form> 
 
</div>




</body>
</html>