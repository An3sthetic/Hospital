<!DOCTYPE html>
<html>
<head>
<title>Delete Data Using PHP- Demo Preview</title>
<meta content="noindex, nofollow" name="robot">
<link rel="stylesheet" type="text/css" href="style.css" media="all" />
<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
</head>
<body>
<div class="title">
Delete Data Using PHP
</div>
<div class="maindiv">
<div class="divA">

<div class="divB">
<div class="divD">
<p>Click On Menu</p>
<?php
$connection = mysql_connect("localhost", "root", ""); // Eastablishing Connection With Server.
$db = mysql_select_db("hospital", $connection); // Selecting Database From Server.
if (isset($_GET['del'])) {
$del = $_GET['del'];
//SQL query for deletion.
$query1 = mysql_query("delete from doctor_info where Essn=$del", $connection);
}
$query = mysql_query("select * from doctor_info", $connection); // SQL query to fetch data to display in menu.
while ($row = mysql_fetch_array($query)) {
echo "<b><a href=\"deleted.php?id={$row['Essn']}\">{$row['dName']}</a></b>";
echo "<br />";
}
?>
</div><?php
if (isset($_GET['id'])) {
$id = $_GET['id'];
// SQL query to Display Details.
$query1 = mysql_query("select * from doctor_info where Essn=$id", $connection);
while ($row1 = mysql_fetch_array($query1)) {
?>
<form class="form">
<h2>---Details---</h2>
<span>Name:</span> <?php echo $row1['dName']."<br>"; ?>
<span>Essn:</span> <?php echo $row1['Essn']."<br>"; ?>
<span>Department:</span> <?php echo $row1['department']."<br>"; ?>
<span>Address:</span> <?php echo $row1['Head_of_the_department']."<br>"; ?>
<?php echo "<b><a href=\"deleted.php?del={$row1['Essn']}\"><input type=\"button\" class=\"submit\" value=\"Delete\"/></a></b>"; ?>
</form><?php
}
}
// Closing Connection with Server.
mysql_close($connection);
?>
<div class="clear"></div>
</div>
<div class="clear"></div>
</div>
</div>
<div id="foot">          		
		<a class="but" href="index.php">back to home</a>
				<div class="footer">
				developed by backbenchers
				</div>	
</div>
</body>
</html>