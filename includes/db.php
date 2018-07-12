<?php
define("DB_HOST", "localhost");
define("DB_USER", "user");
define("DB_PASSWORD", "password");
define("DB_NAME", "dbname");

$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

//if($connection) {
//    echo "we are connected";
//}