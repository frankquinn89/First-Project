<!DOCTYPE html>

<html>
	<head>
	<title>Course Info</title>
	
	<style>
	
body {
    background-image: url("white.jpg");

}
	</style>
	
	<body>
	
	<h2> Here are the details of current students who study Philosophy:</h2>

	<br><br>
	
<?php
error_reporting(E_ALL^E_DEPRECATED);
$con = mysql_connect("localhost","root");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("university", $con);

$result = mysql_query("select STUDENT_ID, FIRST_NAME, SURNAME, COURSE_NAME FROM student, course 
where student.COURSE_ID=course.COURSE_ID and course.COURSE_NAME='philosophy'");

echo "<table border='1'>  
<tr> 
<th>STUDENT_ID</th>
<th>FIRST_NAME </th>
<th>SURNAME</th>
<th>COURSE_NAME</th>
</tr>";

while($row = mysql_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['STUDENT_ID'] . "</td>";
  echo "<td>" . $row['FIRST_NAME'] . "</td>";
  echo "<td>" . $row['SURNAME'] . "</td>";
   echo "<td>" . $row['COURSE_NAME'] . "</td>";;
  echo "</tr>";
  }
echo "</table>";

mysql_close($con);
?> 

<br>
<p><a href=student2.html> RETURN</p>



</body>
</html>