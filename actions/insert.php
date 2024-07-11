<?php

print_r($_POST);

include_once '../connection/connect.php';

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$family_name = $_POST['family_name'];
$email = $_POST['email'];
$phone_number = $_POST['phone_number'];
$date_birth = $_POST['date_birth'];

$sql = "INSERT INTO users (first_name, last_name,family_name, email,phone_number, date_birth)
VALUES ('$first_name', '$last_name', '$family_name', '$email', '$phone_number', '$date_birth')";

$conexion->query($sql);

header("Location: ../index.php");

?>