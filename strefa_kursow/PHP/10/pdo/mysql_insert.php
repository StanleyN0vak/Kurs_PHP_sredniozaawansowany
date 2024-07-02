<?php

$db = new PDO("mysql:host=localhost;dbname=products", "root");

$name = "rower_" . date("His");
$price = date("His");
$sql = "insert into products values (null, :name, :price);";

$statement = $db->prepare($sql);
$statement->bindValue("name", $name, PDO::PARAM_STR);
$statement->bindValue("price", $price, PDO::PARAM_STR);
$statement->execute();