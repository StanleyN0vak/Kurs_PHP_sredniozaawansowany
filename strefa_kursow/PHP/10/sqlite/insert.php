<?php

$db = new SQLite3("data.db");

$name = "rower_" . date("His");
$price = date("His");
$sql = "insert into products values (null, :name, :price);";

$statement = $db->prepare($sql);
$statement->bindValue("name", $name, SQLITE3_TEXT);
$statement->bindValue("price", (float) $price, SQLITE3_NUM);
$statement->execute();
