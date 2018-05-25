<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Doctors Info</title>
	<link rel="stylesheet" type="text/css" href="stylein.css" media="all" />
	<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
</head>
<body>	
	<div class="head">DOCTOR INFORMATION</div>
	<div class="doc">
<?php


    mysql_connect ("localhost", "root","")  or die (mysql_error());
mysql_select_db ("hospital");

   
    $result = mysql_query("SELECT * FROM doctor_info") 
            or die(mysql_error());  
        
    echo "<table border='1' cellpadding='10'>";
    echo "<tr> <th>Name</th> <th>Essn</th><th>Department</th> <th>Head of the department</th> </tr>";


    while($row = mysql_fetch_array( $result )) {
                

            echo "<tr>";
            echo '<td>' . $row['dName'] . '</td>';
            echo '<td>' . $row['Essn'] . '</td>';
			echo '<td>' . $row['department'] . '</td>';
			echo '<td>' . $row['Head_of_the_department'] . '</td>';

                
                
                
				
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