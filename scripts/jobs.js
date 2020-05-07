/**
*Author: Prashanth Reddy Lenkala
*Target:jobs.html
*Purpose: To store the Job Reference Number that is to be displayed in apply.html page.
*/

"use strict"

function jobrefStorage (jref) //function to store the value of job reference number in local storage and redirect the page to apply.html
{
    localStorage.setItem("jref",jref); 
    window.location.href = "apply.php"; 
}

function init()
{
    document.getElementById("firstjob").onclick = function(){jobrefStorage("57169");} //on clicking the apply now button of first job, the job reference number of first job is stored in local storage
    document.getElementById("secondjob").onclick = function(){jobrefStorage("78542");} //on clicking the apply now button of second job, the job reference number of second job is stored in local storage    
}
window.onload = init;