<!DOCTYPE html>

<html>
	<head>
		<link href="Css.css" type="text/css" rel="stylesheet"/>                 
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>Update Students</title>
		<style type="text/css">
		
			body {
				margin:0;																
				padding:0;
				font-family: Sans-Serif;
				line-height: 1.5em;
			
			}
			
			
			
			header {
				background: #ccc;
				height: 100px;
			}
			
			header h1 {
				margin: 0;
				padding-top: 40px;
			}
			
			main {
				padding-bottom: 10010px;
				margin-bottom: -10000px;
				float: left;
				width: 100%;
			}
			
			nav {
				padding-bottom: 10010px;
				margin-bottom: -10000px;
				float: left;
				width: 230px;
				margin-left: -230px;
				background: #eee;
			}
			
			footer {
				clear: left;
				width: 100%;
				background: #ccc;
				text-align: left;
				padding: 1px 0;
			}
	
			#wrapper {
				overflow: hidden;
			}
						
			#content {
				margin-right: 230px;
			}
			
			.innertube {
				margin: 15px;
				margin-top: 0;
			}
		
			p {
				color: #555;
			}
	
			nav ul {
				list-style-type: none;
				margin: 0;
				padding: 0;
			}
			
			nav ul a {
				color: darkgreen;
				text-decoration: none;
			}
			
			
			li {
    float: left;
}

a:link, a:visited {
    display: block;
    width: 1200px;
    font-weight: bold;
    color: black;
    background-color: white;
    padding: 4px;
}

a:hover, a:active {
    background-color: aqua;
}
		
		</style>
		
	
	</head>
	
	<body>		

		<header>
			<div>
			<center>
				<h1><font color=black> Update Student Details</h1>
			</center>
					<img style="position:absolute; top:1px; left:1px; width:100px; height:100px" src=logo.jpg> 
			</div>
		</header>
		
		<div id="wrapper">			
			<main>	
			
		
	</center>
		
				<div id="content">
					<div class="innertube">
				     
				<main>
					<center>	
					<div id="content">
					<div class="innertube">
						<p id=para1"> <center>
						
						<script>
	function alphaOnly(event) {     
  var key = event.keyCode;
  return (key >= 58 || key==13 );  
};
						</script>

	
						<form action="update.php" method="post">
						
						
						<h2><font color=black>ENTER STUDENT ID FOR THE STUDENT YOU WANT TO UPDATE DETAILS FOR -->
						<input type="tel" name="STUDENT_ID" maxlength='4' onkeypress="return event.charCode >= 48 && event.charCode <= 57" required/>
						<-- <br>THEN CHANGE DETAILS IN BOXES BELOW GRAPH.</h2>
					
<?php
error_reporting(E_ALL^E_DEPRECATED);
$con = mysql_connect("localhost","root");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());}

mysql_select_db("university", $con);

$result = mysql_query("SELECT * FROM student");

echo "<table border='5'CELLSPACING='5' CELLPADDING='1' bgcolor='white' >  
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
						First name:<br>
						<input type="text" name="FIRST_NAME" onkeypress="return alphaOnly(event)" required>
						<br>
						Last name:<br>
						<input type="text" name="SURNAME" onkeypress="return alphaOnly(event)"required>
						<br>
						Date of Birth:<br>
						<input type='date' name="DOB" required>
						<br>
						Address:<br>
						<input type='text' name="ADDRESS" required>
						<br>
						Email:<br>
						<input type='email' name="EMAIL" placeholder="@ODDLU.ie" required>
						<br>
						Phone Number:<br>
						<input type="tel" name="PHONE_NUM"
						placeholder="000000000"  maxlength='10' onkeypress="return event.charCode >= 48 && event.charCode <= 57" required> 
						<br>
						Temporary Password:<br>
						<input type='password' name="PASSWORD" maxlength=8 required>
						<br>
						<br>
						Course:<br> 
						<input type='radio' name="COURSE_ID" value="100" checked required>Software Development
						<br>
						<input type='radio' name="COURSE_ID" value="900">Philosophy
						<br>
						<br>
						Gender:<br>
						<input type="radio" name="GENDER" value="male" checked required> Male
						<br>
						<input type="radio" name="GENDER" value="female" > Female
						<br><br>
						
						<input type="submit" value="Submit"></p>
						</form>
						
						
						
						<script src="js/utilities.js"></script>
						<script src="js/submit-event.js"></script></p>
					</div>
				</div>
			</main><br>
					 <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
					</div>
				</div>
			</main>
			</center>
			

			
			<nav>
				<div class="innertube">
					
					<h2>Navigation:</h2>
	
					<ul>
						<li><a href=Main.html>Main Menu</a></li>
					</ul>
				</div>
				
			</nav>
		
		</div>
		
		<footer>
			<div class="innertube">
				<p>Open Door Distance Learning University</p>
			</div>
		</footer>
	
	</body>
</html>
	
	</body>
</html>