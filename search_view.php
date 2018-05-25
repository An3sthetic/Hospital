<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Search Result</title>
 <link rel="stylesheet" type="text/css" href="styleform.css" media="all" />
</head>

<body>
<div id="vfoot">          		
<a class="vbut" href="index.php">back to home</a>
<div class="vfooter">
	developed by backbenchers
				</div>
</div>
<div class="title">Search results</div>
<div class="con">
<?php
// Make a MySQL Connection
mysql_connect ("localhost", "root","")  or die (mysql_error());
mysql_select_db ("hospital");
// Construct our join query
//WORKING

$term = $_POST['term'];

$query = "SELECT patient_info.Name, department.name FROM patient_info, department WHERE patient_info.Department = department.Dep_id AND patient_info.Id like '%$term%'";
	 
$result = mysql_query($query) or die(mysql_error());


// Print out the contents of each row into a table 
while($row = mysql_fetch_array($result)){
	echo "<table border='1' cellpadding='10'>";
    echo "<tr> <th>Name</th><th>Department</th> </tr>";
	echo "<tr>";
	echo '<td>' . $row['Name'] . '</td>';
	echo '<td>' . $row['name'] . '</td>';
	
	echo "<br />";
}
?>
	</div>

</body>
</html>
