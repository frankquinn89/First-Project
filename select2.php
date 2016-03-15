<!DOCTYPE html>

<html>
	<head>
	<title>Student List</title>
	
	<style>
	
body {
    background-image: url("white.jpg");

}
	</style>
	
	<body>
	
	<h2> Here are the details of current students enroled:</h2>

	<br><br>

<?php
error_reporting(E_ALL^E_DEPRECATED);
$con = mysql_connect("localhost","root");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("university", $con);

$result = mysql_query("SELECT * FROM student");

echo "<table border='1'>  
<tr> 
<th>STUDENT_ID</th>
<th>FIRST_NAME </th>
<th>SURNAME</th>
<th>DOB</th>
<th>ADDRESS </th>
<th>EMAIL </th>
<th>PHONE_NUM</th>
<th>PASSWORD</th>
<th>COURSE_ID</th>
<th>GENDER</th>
</tr>";

while($row = mysql_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['STUDENT_ID'] . "</td>";
  echo "<td>" . $row['FIRST_NAME'] . "</td>";
  echo "<td>" . $row['SURNAME'] . "</td>";
   echo "<td>" . $row['DOB'] . "</td>";
   echo "<td>" . $row['ADDRESS'] . "</td>";
  echo "<td>" . $row['EMAIL'] . "</td>";
  echo "<td>" . $row['PHONE_NUM'] . "</td>";
   echo "<td>" . $row['PASSWORD'] . "</td>";
   echo "<td>" . $row['COURSE_ID'] . "</td>";
   echo "<td>" . $row['GENDER'] . "</td>";
  echo "</tr>";
  }
echo "</table>";

mysql_close($con);
?> 

<br>
<p><a href=student2.html> RETURN </p>

</body>
</html>

