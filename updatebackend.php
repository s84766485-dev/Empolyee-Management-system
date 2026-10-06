<?php
include "connection.php";

$id = $_POST["id"];
$empname = $_POST["empname"];
$empage = $_POST["empage"];
$fname = $_POST["fname"];

$statement = $connection->prepare("UPDATE emp SET empname=?,empage=?,fname=? WHERE id=?");

$statement->execute([$empname,$empage,$fname,$id]);

header("Location: dashboard.php");
?>