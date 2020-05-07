/**
*Author: Prashanth Reddy Lenkala
*Target:apply.html
*Purpose: 1) To validate the State&Postcode, Age of applicant and the Other skills to be entered in the textbox.
*		  2) To retrieve the Job Reference Number from jobs.html page and display it in apply.html page in read only format.
*		  3) To prefill the applicant's data, if he wants to apply for another job in the same browser session.
*/


"use strict";

function validate()
{
	var result = true;
	var isOther = document.getElementById("other").checked;
	var othertext1 = document.getElementById("othertext").value;	
	var state1 = document.getElementById("state").value;
	var postcode1 = document.getElementById("postcode").value;	
	var dob1 = document.getElementById("dob").value.split("/");
	var date = new Date(dob1[2], parseInt(dob1[1]) - 1, dob1[0]);
	var today = new Date();
	var age = today.getFullYear() - date.getFullYear();		
	var postKey = postcode1.charAt(0);    
    switch (state1) 
	{
        case "VIC":  //validate post code and state for VIC
            if (postKey != 3 && postKey != 8)
			{
                result = false;
                document.getElementById("error2").innerHTML = "VIC post code starts with either 3 or 8. (ex: 3166, 8475)";    
            }                        
			else
				document.getElementById("error2").innerHTML = "";
			break;
			
		case "NSW":   //validate post code and state for NSW
            if (postKey != 1 && postKey!= 2){
                result = false;
                document.getElementById("error2").innerText = "NSW post code starts with either 1 or 2. (ex: 1145, 2544)";
            }            	
			else
				document.getElementById("error2").innerHTML = "";
			break;
			
        case "QLD":   //validate post code and state for QLD
            if (postKey != 4  && postKey != 9)
			{
                result = false;
                document.getElementById("error2").innerHTML = "QLD post code starts with either 4 or 9. (ex: 4557, 9556)";
            }            
			else
				document.getElementById("error2").innerHTML = "";
			break;
			
		case "NT":   //validate post code and state for NT
            if (postKey != 0)
			{
                result = false;
                document.getElementById("error2").innerHTML = "NT post code starts with 0. (ex: 0021)";
            }           
			else
				document.getElementById("error2").innerHTML = "";
			break;
			
        case "WA":   //validate post code and state for WA
            if (postKey != 6)
			{
                result = false;
                document.getElementById("error2").innerHTML = "WA post code starts with 6. (ex: 6223)";
            }         
			else
				document.getElementById("error2").innerHTML = "";
			break;
        
        case "SA":   //validate post code and state for SA
            if (postKey != 5)
			{
                result = false;
                document.getElementById("error2").innerHTML = "SA post code starts with 5. (ex: 5113)";
            }           
			else
				document.getElementById("error2").innerHTML = "";
			break;
		
		case "TAS":   //validate post code and state for TAS
            if (postKey != 7)
			{
                result = false;
                document.getElementById("error2").innerHTML = "TAS post code starts with 7. (ex: 7537)";
            }            
			else
				document.getElementById("error2").innerHTML = "";
			break;
			
		case "ACT":   //validate post code and state for ACT
            if (postKey != 0)
			{
                result = false;
                document.getElementById("error2").innerHTML = "ACT post code starts with 0. (ex: 0021)";
            }            
            else
				document.getElementById("error2").innerHTML = "";
			break;
    }
	
	
	
	if (age > 80) //validate the age limit of applicant to set maximum age of 80
	{ 
		document.getElementById("error1").innerHTML = "Sorry..! Your age must be less than 80 to apply for this job.";
		result = false;
	}
	else
		document.getElementById("error1").innerHTML = "";
	
		
	if (age < 15) //validate the age limit of applicant to set minimum age of 15
	{ 
		document.getElementById("error1").innerHTML = "Sorry..! Your age must be atleast 15 to apply for this job.";
		result = false;
	}
	else
		document.getElementById("error1").innerHTML = "";
	
	
	if(isOther && othertext1 =="") ////validation for other skills text box input if the otherskills checkbox is checked.
	{
		document.getElementById("error3").innerHTML = "Please enter your other skills in the textbox provided";
		return false;
	}	
	else
		document.getElementById("error3").innerHTML = "";
	
	
	if(result)
		storedetails(firstname, lastname, dob, address, suburb,state, postcode, email, phnumber, othertext);
	
	return result;		 
}


function storedetails(firstname, lastname, dob, address, suburb,state, postcode, email, phnumber, othertext) //function to store the form details in sessionStorage
{
	var firstname = document.getElementById("firstname").value;
	var lastname = document.getElementById("lastname").value;
	var dob = document.getElementById("dob").value;	
	var address = document.getElementById("address").value;
	var suburb = document.getElementById("suburb").value;
	var state = document.getElementById("state").value;
	var postcode = document.getElementById("postcode").value;
	var email = document.getElementById("email").value;
	var phnumber = document.getElementById("phnumber").value;	
	var othertext = document.getElementById("othertext").value;	
	
	sessionStorage.setItem("firstnameinput", firstname);
	sessionStorage.setItem("lastnameinput", lastname);
	sessionStorage.setItem("dobinput", dob);		
	sessionStorage.setItem("addressinput", address);
	sessionStorage.setItem("suburbinput", suburb);
	sessionStorage.setItem("stateinput", state);	
	sessionStorage.setItem("postcodeinput", postcode);
	sessionStorage.setItem("emailinput", email);
	sessionStorage.setItem("phnumberinput", phnumber);		
	sessionStorage.setItem("othertextinput", othertext);
}


function getDetails() //function to retrieve the form data and assign them to respective fields in apply.html page.
{
	document.getElementById("firstname").value = sessionStorage.getItem("firstnameinput");
	document.getElementById("lastname").value = sessionStorage.getItem("lastnameinput");	
	document.getElementById("dob").value = sessionStorage.getItem("dobinput");		
	document.getElementById("address").value = sessionStorage.getItem("addressinput");
	document.getElementById("suburb").value = sessionStorage.getItem("suburbinput");
	document.getElementById("state").value = sessionStorage.getItem("stateinput");
	document.getElementById("postcode").value = sessionStorage.getItem("postcodeinput");
	document.getElementById("email").value = sessionStorage.getItem("emailinput");
	document.getElementById("phnumber").value = sessionStorage.getItem("phnumberinput");	
	document.getElementById("othertext").value = sessionStorage.getItem("othertextinput");
}

function init()
{
	var applyForm = document.getElementById("applyform");
	applyForm.onsubmit = validate; 
	document.getElementById("jref").value = localStorage.getItem("jref"); //retreives the value of job reference number from localstorage
	document.getElementById("jref").readOnly = true; //set the value in job reference number field to read only
	getDetails();	// run the getDetails() function to prefill the form data
}
window.onload=init;







