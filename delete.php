<?php

include "connection.php";

$id = $_GET["id"];

$statement = $connection->prepare("DELETE FROM emp WHERE id = ?");

$statement->execute([$id]);

header("Location: dashboard.php");