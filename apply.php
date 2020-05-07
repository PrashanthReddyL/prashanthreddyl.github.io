<!DOCTYPE html>
<html lang = "en">

<head>
  <meta charset="utf-8" />
  <meta name="description" content="Job application form page" />
  <meta name="keywords" content="HTML5" />
  <meta name="author" content="Prashanth Reddy"  />
  <link rel="stylesheet" type="text/css" href="styles/style.css">  
  <script src="scripts/apply.js"></script>
<title>Apply</title>
</head>

<body>
<?php include_once 'Header.inc'?>
 
 <div id = "main">
 <h2>Apply Online</h2>
 <div class = "formcontent">
 
 <form id = "applyform" action = "processEOI.php" method = "post"  novalidate="novalidate">
 
  <p>Job Reference Number: <input id = "jref" type="text" name="JobReferenceNumber" maxlength="5" pattern="[A-Za-z0-9]{5}" required>  </p>
  <p> First name:  <input id= "firstname" type="text" name="FirstName" maxlength="20" required>  </p>
  <p>Last name:   <input id = "lastname" type="text" name="LastName" maxlength="20" required>   </p>
  <p>Date of Birth:  <input id="dob" type="text" name="DateofBirth" placeholder="dd/mm/yyyy" pattern="\d{1,2}/\d{1,2}/\d{4}" maxlength="10" size="10" required="required" /> </p>
  <p id="error1"></p>
  <fieldset id = "gender">
	<legend>Gender</legend>
			<label for="male">Male</label>
			<input type="radio" name="Gender" id="male" value="male"/>
			<label for="female">Female</label>
			<input type="radio" name="Gender" id="female" value="female" />
  </fieldset>
  <p>.</p>
  <p>.</p>
  <p>Street Address:  <input type="text" id = "address" name="Address" maxlength="40" required>   </p>
  <p>Suburb/town:  <input type="text" id = "suburb" name="Suburb" maxlength="40" required>   </p>
  <p>State:  <select id = "state" name="State" >
  
  <option value="VIC">VIC</option>
  <option value="NSW">NSW</option>
  <option value="QLD">QLD</option>
  <option value="NT">NT</option>
  <option value="WA">WA</option>
  <option value="SA">SA</option>
  <option value="TAS">TAS</option>
  <option value="ACT">ACT</option>
  </select>   </p>
  <p>Post Code:  <input id = "postcode" type="text" name="PostCode" maxlength="4" pattern="[0-9]{4}" required>   </p>
  <p id="error2"></p>
  <p>Email address:  <input id = "email" type="email" name="Email" required>   </p>
  <p>Phone Number:  <input id = "phnumber" type="text" name="Ph. Number" pattern="[0-9]{8,12}" required>  </p> 
  <p>Skill List:    <p><input id = "C" type="checkbox" name="Skill1" value="C"> C </p>
					<p><input id = "C++" type="checkbox" name="Skill2" value="C++"> C++ </p>
					<p><input id = "Java" type="checkbox" name="Skill3" value="Java"> Java </p>
					<p><input id = "Python" type="checkbox" name="Skill4" value="Python"> Python  </p>
					<p><input id = "Android" type="checkbox" name="Skill5" value="Android"> Android </p>
					<p><input id = "NodeJS" type="checkbox" name="Skill6" value="NodeJS"> NodeJS </p> 
					<p><input id = "React" type="checkbox" name="Skill7" value="React"> React </p>
					<p><input id = "other" type="checkbox" id = "other" name="Otherskills">  Other Skills </p>
 <textarea id="othertext" name="otherskillsarea" rows="4" cols="50" ></textarea>
	<p id="error3"></p>
  <input id="applybutton" class = "button" type="submit" value="Apply"> 
  
</form> 
</div>
</div>



</body>
</html>