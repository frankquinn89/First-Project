<?php
error_reporting(E_ALL ^ E_DEPRECATED);
$con = mysql_connect('localhost','root'); //connecting to database
if (!$con)
  {
  die('Could not connect: ' . mysql_error()); //if connection is unsuccessful it give a message 'could not connect'
  }

mysql_select_db("university", $con); //tells which database that you want to work with

$sql="INSERT INTO student (FIRST_NAME, SURNAME, DOB, ADDRESS, EMAIL, PHONE_NUM, PASSWORD, COURSE_ID, GENDER)
VALUES
('$_POST[FIRST_NAME]','$_POST[SURNAME]','$_POST[DOB]','$_POST[ADDRESS]','$_POST[EMAIL]','$_POST[PHONE_NUM]','$_POST[PASSWORD]'
,'$_POST[COURSE_ID]','$_POST[GENDER]')";

if (!mysql_query($sql,$con)) //this executes all the code above for the sql statement
  {
  die('ERROR: ' . mysql_error());
  }
echo "Data Entered Successfully!";

mysql_close($con); //closing connection to database
?> 
<br>
<br>
<p><a href=AddStudent.html> RETURN </a></p>