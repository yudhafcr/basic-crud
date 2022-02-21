<?php
$server = "localhost";
$user = "root";
$pass = "";
$database = "laundry";
$conn = mysqli_connect($server, $user, $pass, $database);
if (!$conn) {
    echo "gagal konek";
}
