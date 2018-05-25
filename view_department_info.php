<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Departments</title>
	<link rel="stylesheet" type="text/css" href="stylein.css" media="all" />
</head>
<body>
	<div class="head">DEPARTMENT INFORMATION</div>
	<div class="dep">		
	<?php


    mysql_connect ("localhost", "root","")  or die (mysql_error());
mysql_select_db ("hospital");

   
    $result = mysql_query("SELECT * FROM department") 
            or die(mysql_error());  
	
    echo "<table border='1' cellpadding='10'>";
    echo "<tr> <th>Name</th><th>Department id</th> <th>Head of the department</th> </tr>";


    while($row = mysql_fetch_array( $result )) {
                

            echo "<tr>";
            echo '<td>' . $row['name'] . '</td>';
            echo '<td>' . $row['Dep_id'] . '</td>';
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