<?php
 
$hostname = 'localhost';        // Your MySQL hostname. Usualy named as 'localhost', so you're NOT necessary to change this even this script has already online on the internet.
 $dbname   = 'friendify'; // Your database name.
 $username = 'root';             // Your database username.
 $password = 'JuLy1997';                 // Your database password. If your database has no password, leave it empty.
 
// Let's connect to host
 mysql_connect($hostname, $username, $password) or DIE(mysql_error());
 // Select the database
 mysql_select_db($dbname) or DIE('Database name is not available!');
 
?>
