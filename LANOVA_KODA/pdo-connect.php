<?php

$mysql_host = "localhost";

$mysql_database = "phpexcelltest";

$mysql_user = "zanr512";

$mysql_password = "";


//Povezava na bazo

$baza = new PDO('mysql:host='.$mysql_host.'; dbname='.$mysql_database, $mysql_user, $mysql_password);
