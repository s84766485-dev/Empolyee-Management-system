<?php
include "connection.php";

$department_name = $_POST["department_name"];

$statement = $connection->prepare("INSERT INTO department(department_name) VALUES(?)");

$statement->execute([$department_name]);

header("Location: dashboard.php");
?>
