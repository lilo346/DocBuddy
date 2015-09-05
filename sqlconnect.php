<?php
     DEFINE ('DB_USER', 'docbuddy');
     DEFINE ('DB_PASSWORD', 'ubuntu10');
     DEFINE ('DB_HOST', 'localhost');
     DEFINE ('DB_NAME', 'docbuddy');
     
     $dbc = @mysqli_connect (DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) OR die ('Failed Connection:' . mysqli_connect_error());
     
    
?>