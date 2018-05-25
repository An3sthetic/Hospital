<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>add</title>
	<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
</head>
<body>
	<?php

$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="hospital"; // Database name 
$tbl_name="patient_info"; // Table name 

// Connect to server and select database.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

// Get values from form 
$name=$_POST['Name'];
$sid=$_POST['Address'];
$dep=$_POST['Id'];
$head=$_POST['department'];
$ad=$_POST['Admission_Date'];


// Insert data into mysql 
$sql=mysql_query("INSERT INTO $tbl_name VALUES('$name','$sid','$dep', '$head', '$ad')");
//$result=mysql_query($sql);

// if successfully insert data into database, displays message "Successful".

if($sql){
echo "Successful";
echo "<BR>";
echo "<a href='patient_add_form.php'>Add Another</a>";
echo "<BR>";
echo "<a href='index.php'>Index Page</a>";

}

else {
echo "ERROR";
}
?> 

<?php 
// close connection 
mysql_close();
?>
</body>
</html>