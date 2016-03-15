<!DOCTYPE html>

<html>
	<head>
	<title>Module List</title>
	
	<style>
	
body {
    background-image: url("white.jpg");

}
	</style>
	
	<body>
	
	<h2> Here are the details of modules provided by the Open Door Distance Learning University:</h2>

	<br><br>


<?php
error_reporting(E_ALL^E_DEPRECATED);
$con = mysql_connect("localhost","root");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("university", $con);

$result = mysql_query("SELECT * FROM tutor");

echo "<table border='1'>  
<tr> 
<th>TUTOR_ID</th>
<th>TUTOR_NAME </th>
<th>MODULE_ID</th>
<th>EMAIL</th>
</tr>";

while($row = mysql_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['TUTOR_ID'] . "</td>";
  echo "<td>" . $row['TUTOR_NAME'] . "</td>";
  echo "<td>" . $row['MODULE_ID'] . "</td>";
   echo "<td>" . $row['EMAIL'] . "</td>";
  echo "</tr>";
  }
echo "</table>";

mysql_close($con);
?> 

<br>
<p><a href=tutor2.html> RETURN </p>

</body>
</html>