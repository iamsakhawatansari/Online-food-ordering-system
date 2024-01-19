<?php
$con = new mysqli("localhost", "root", "", "ordersystem", 3306);
if ($con->connect_error) {
    die("failed to connect : " . $con->connect_error);
}
?>