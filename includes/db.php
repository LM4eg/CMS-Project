<?php
define("DB_HOST", "localhost");
define("DB_USER", "admin_cms");
define("DB_PASSWORD", "sR8oep0t0z");
define("DB_NAME", "admin_cms");

$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

if($connection) {
    echo "we are connected";
}