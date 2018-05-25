<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Test and reports</title>
	<link rel="stylesheet" type="text/css" href="stylein.css" media="all" />
	<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
</head>
<body>
		<div class="head">TESTS INFORMATION</div>
			<div class="test">
			<?php


    mysql_connect ("localhost", "root","")  or die (mysql_error());
mysql_select_db ("hospital");

   
    $result = mysql_query("SELECT * FROM status") 
            or die(mysql_error());  
        
    echo "<table border='1' cellpadding='10'>";
    echo "<tr> <th>Patient Id</th><th>Prescribed by</th> <th>Test</th> <th>Submission date</th></tr>";


    while($row = mysql_fetch_array( $result )) {
                

            echo "<tr>";
            echo '<td>' . $row['Id'] . '</td>';
            echo '<td>' . $row['Physician'] . '</td>';
			echo '<td>' . $row['Test_name'] . '</td>';
			echo '<td>' . $row['Report_submission'] . '</td>';
                
                
                
				
            echo "</tr>"; 
        } 

        echo "</table>";
?>
</div>
			<div id="foot">          		
			<a class="but" href="index.php">back to home</a>
				<div class="footer">
				developed by backbenchers
				</div>
			</div>
</body>
</html>