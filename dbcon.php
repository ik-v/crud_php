<?php
    define("HOSTNAME", "localhost");
    define("USERNAME", "root");
    define("PASSWORD", "");
    define("DATABASE", "crud_operation");

    $conection = mysqli_connect (HOSTNAME, USERNAME, PASSWORD,  DATABASE);

    if (!$conection) {
        die("Conection Failed");
    }

?>