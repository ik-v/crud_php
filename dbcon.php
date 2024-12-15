<?php
    define("HOSTNAME", "localhost");
    define("USERNAME", "root");
    define("PASSWORD", "");
    define("DATABASE", "crud");

    $conection = mysqli_connect (HOSTNAME, USERNAME, PASSWORD,  DATABASE);

    if (!$conection) {
        die("Conection Failed");
    }

<<<<<<< HEAD
    $username = '';
    $name = '';
    $email = '';
    $user_level = '';
    $dob = '';

=======
    $fname = '';
    $lname = '';
    $age = '';
    $sex = '';
>>>>>>> 2e332e7b3b09de578fbb3e4e7d845d77d3c83b59
?>