<?php
$host        = "host = localhost";
   $port        = "port = 5432";
   $dbname      = "dbname = mydata";
   $credentials = "user = postgres password=1234";
   $db = pg_connect( "$host $port $dbname $credentials");
?>