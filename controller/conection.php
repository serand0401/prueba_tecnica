<?php
$host_name = 'localhost';
$database = 'edit_user';
$user_name = 'root';
$password = '';

$conection = mysqli_connect($host_name, $user_name, $password, $database);

if (mysqli_errno($conection)) {
    echo "Error connecting to the DB";
} else {
    echo "Connection DB successful";
}

$acentos = $conection -> query("SET NAMES 'utf8'");

?>