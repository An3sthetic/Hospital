<!DOCTYPE html>
<html>
<head>
<title></title>
<link href="style.css" rel="stylesheet" type="text/css">
<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
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
$Head_of_the_department = $_GET['dHead_of_the_department'];
$query = mysql_query("update doctor_info set
dName='$name', department='$department', Head_of_the_department='$Head_of_the_department' where Essn='$id'", $connection);
}
$query = mysql_query("select * from doctor_info", $connection);
while ($row = mysql_fetch_array($query)) {
echo "<b><a href=\"updated.php?update={$row['Essn']}\">{$row['dName']}</a></b>";
echo "<br />";
}
?>
</div><?php
if (isset($_GET['update'])) {
$update = $_GET['update'];
$query1 = mysql_query("select * from doctor_info where Essn=$update", $connection);
while ($row1 = mysql_fetch_array($query1)) {
echo "<form class='form' method='get'>";
echo"<input class='input' type='hidden' name='did' value='{$row1['Essn']}' />";
echo "<br />";
echo "<label>" . "Name:" . "</label>" . "<br />";
echo"<input class='input' type='text' name='dname' value='{$row1['dName']}' />";
echo "<br />";
echo "<label>" . "Department:" . "</label>" . "<br />";
echo"<input class='input' type='text' name='ddepartment' value='{$row1['department']}' />";
echo "<br />";
echo "<label>" . "Head of the department:" . "</label>" . "<br />";
echo"<input class='input' type='text' name='dHead_of_the_department' value='{$row1['Head_of_the_department']}' />";
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
<div class="clear"></div>
</div>
<div class="clear"></div>
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