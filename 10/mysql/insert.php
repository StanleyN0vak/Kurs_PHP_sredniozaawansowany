<?php

$db = new mysqli("localhost", "root", null, "products");

$name = "Książka_" . date("His");
$price = date("His");
$sql = "insert into products values (null, ?, ?);";

$statement = $db->prepare($sql);
$statement->bind_param("sd", $name, $price);
$statement->execute();