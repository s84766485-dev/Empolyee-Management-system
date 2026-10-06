<?php

include "connection.php";

$empname = $_POST["empname"];
$empage = $_POST["empage"];
$fname = $_POST["fname"];
$department_name = $_POST["department_name"];

$statement = $connection->prepare(
    "INSERT INTO emp (empname, empage, fname, department_name)
     VALUES (?, ?, ?, ?)"
);

$statement->execute([
    $empname,
    $empage,
    $fname,
    $department_name
]);

header("Location: dashboard.php");
exit();

?>