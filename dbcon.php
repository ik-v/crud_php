<?php
    define("HOSTNAME", "localhost");
    define("USERNAME", "root");
    define("PASSWORD", "");
    define("DATABASE", "crud");

    $conection = mysqli_connect (HOSTNAME, USERNAME, PASSWORD,  DATABASE);

    if (!$conection) {
        die("Conection Failed");
    }

    $username = '';
    $name = '';
    $email = '';
    $user_level = '';
    $dob = '';

?>