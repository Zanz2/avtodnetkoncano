<?php

$mysql_host = "localhost";

$mysql_database = "projekt";

$mysql_user = "zanr512";

$mysql_password = "";


//Povezava na bazo

$baza1 = new PDO('mysql:host='.$mysql_host.'; dbname='.$mysql_database, $mysql_user, $mysql_password);