
<?php
// Connect to server and select database.
mysql_connect("localhost", "root")
	or die("Cannot connect to Database!"); 

	mysql_select_db("university")
		or die("Cannot select Database!");

// update data in mysql database 
$sql="UPDATE student SET FIRST_NAME='".$_POST['FIRST_NAME']."', SURNAME='".$_POST['SURNAME']."',
 DOB='".$_POST['DOB']."', ADDRESS='".$_POST['ADDRESS']."', 
 EMAIL='".$_POST['EMAIL']."', PHONE_NUM='".$_POST['PHONE_NUM']."', PASSWORD='".$_POST['PASSWORD']."',
 COURSE_ID='".$_POST['COURSE_ID']."',GENDER='".$_POST['GENDER']."' WHERE STUDENT_ID='".$_POST['STUDENT_ID']."'";

$result=mysql_query($sql)
or die ("Error: " . mysql_error());


// if successfully updated. 
if($result){
	echo "Student Details Updated Successfully!";
}else {
	echo ("ERROR: " .mysql_error());
}

?>



<br>
<p><a href=student2.html> RETURN</p>



</body>
</html>