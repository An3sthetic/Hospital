<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Patient info</title>
	<link rel="stylesheet" type="text/css" href="stylein.css" media="all" />
</head>
<body>
	<div class="head">PATIENT INFORMATION</div>
	<div class="pat">
	<?php


    mysql_connect ("localhost", "root","")  or die (mysql_error());
mysql_select_db ("hospital");

   
    $result = mysql_query("SELECT * FROM patient_info") 
            or die(mysql_error());  

        
    echo "<table border='1' cellpadding='10'>";
    echo "<tr> <th>Name</th> <th>Address</th> <th>Id</th> <th>Department</th> <th>Admission Date</th></tr>";


    while($row = mysql_fetch_array( $result )) {
                

            echo "<tr>";
            echo '<td>' . $row['Name'] . '</td>';
            echo '<td>' . $row['Address'] . '</td>';
			echo '<td>' . $row['Id'] . '</td>';
			echo '<td>' . $row['Department'] . '</td>';
			echo '<td>' . $row['Admission_Date'] . '</td>';
                
                
                
				
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