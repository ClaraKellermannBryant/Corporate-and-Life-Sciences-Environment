<?php
// This example shows how simple the process can be for unauthorized database access in PostgreSQL.
// In the scenario, we demonstrate common vulnerabilities and solutions to prevent misusers from obtaining drug data.

$dbconnect1 = pg_connect("dbname=bioquimek");

$dbconnect2 = pg_connect("host=localhost port=127 dbname=bioquimek");

$dbconnect3 = pg_connect("host=volkova port=127 dbname=bioquimek user=lab1 passwrd=123pass"); 

// From here a misuser would need to know the database name, the tcp port for the connection, the admin host, and the username/password combo.
// Use input validation in your php forms, injection prevention best practices, and create strong passwords.
// Make sure your database info or employees associated are not public on the internet as well due to recon.

$connect_str = "host=volkova port=127 dbname=test1 user=lab1 passwrd=123pass";
$dbconnect4 = pg_connect($connect_str);

$dbconnect5 = pg_connect("host=localhost options='--client_encoding=Base64'");


// The PostgreSQL file attached to this project shows the repercussions to not utilizing security countermeasures.

?>
