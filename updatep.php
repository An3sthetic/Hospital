<!DOCTYPE html>
<html>
<head>
<title></title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="title">
Update Form
</div>
<div class="maindiv">
<div class="divA">
<div class="divB">
<div class="divD">
<p>Click to Update</p>
<?php
$connection = mysql_connect("localhost", "root", "");
$db = mysql_select_db("hospital", $connection);
if (isset($_GET['submit'])) {
$id = $_GET['did'];
$name = $_GET['dname'];
$department = $_GET['ddepartment'];
$Address = $_GET['dAddress'];
$Admission_Date = $_GET['dAdmission_Date'];
$query = mysql_query("update doctor_info set
Name='$name', Department='$department', Address='$Address', Admission_Date='$Admission_Date' where Id='$id'", $connection);
}
$query = mysql_query("select * from patient_info", $connection);
while ($row = mysql_fetch_array($query)) {
echo "<b><a href=\"updatep.php?update={$row['Id']}\">{$row['Name']}</a></b>";
echo "<br />";
}
?>
</div><?php
if (isset($_GET['update'])) {
$update = $_GET['update'];
$query1 = mysql_query("select * from patient_info where Id=$update", $connection);
while ($row1 = mysql_fetch_array($query1)) {
echo "<form class='form' method='get'>";
echo"<input class='input' type='hidden' name='did' value='{$row1['Id']}' />";
echo "<br />";
echo "<label>" . "Name:" . "</label>" . "<br />";
echo"<input class='input' type='text' name='dname' value='{$row1['Name']}' />";
echo "<br />";
echo "<label>" . "department:" . "</label>" . "<br />";
echo"<input class='input' type='text' name='ddepartment' value='{$row1['Department']}' />";
echo "<br />";
echo "<label>" . "Address:" . "</label>" . "<br />";
echo"<input class='input' type='text' name='dAddress' value='{$row1['Address']}' />";
echo "<br />";
echo "<label>" . "Admission_Date:" . "</label>" . "<br />";
echo"<input class='input' type='date' name='dAdmission_Date' value='{$row1['Admission_Date']}' />";
echo "<br />";
echo "<input class='submit' type='submit' name='submit' value='update' />";
echo "</form>";
}
}
if (isset($_GET['submit'])) {
echo '<div class="form" id="form3"><br><br><br><br><br><br>
<Span>Data Updated Successfuly......!!</span></div>';
}
?>

</div>

</div>
</div><?php
mysql_close($connection);
?>
<div id="pfoot">          		
		<a class="pbut" href="index.php">back to home</a>
				<div class="pfooter">
				developed by backbenchers
				</div>	
</div>
</body>
</html>