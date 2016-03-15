<!DOCTYPE html>

<html>
	<head>
	<title>Course List</title>
	
	<style>
	
body {
    background-image: url("white.jpg");

}
	</style>
	
	<body>
	
	<h2> Here are the details of courses provided by the Open Door Distance Learning University:</h2>

	<br><br>
	
<?php
error_reporting(E_ALL^E_DEPRECATED);
$con = mysql_connect("localhost","root");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("university", $con);

$result = mysql_query("SELECT * FROM course");

echo "<table border='1'>  
<tr> 
<th>COURSE_ID</th>
<th>COURSE_NAME </th>
<th>MODULE_A_ID</th>
<th>MODULE_B_ID </th>
<th>MODULE_C_ID </th>
</tr>";

while($row = mysql_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['COURSE_ID'] . "</td>";
  echo "<td>" . $row['COURSE_NAME'] . "</td>";
  echo "<td>" . $row['MODULE_A_ID'] . "</td>";
   echo "<td>" . $row['MODULE_B_ID'] . "</td>";
   echo "<td>" . $row['MODULE_C_ID'] . "</td>";

  echo "</tr>";
  }
echo "</table>";

mysql_close($con);
?> 

<br>
<p><a href=tutor2.html> RETURN </p>

</body>
</html>