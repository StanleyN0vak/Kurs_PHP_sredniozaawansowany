<?php

$db = new PDO("mysql:host=localhost;dbname=products", "root");
//$db = new PDO("sqlite:../sqlite/data.db");

$sql = "select * from products;";
$statement = $db->prepare($sql);
$statement->execute();

$result = $statement->fetchAll(PDO::FETCH_ASSOC);

foreach ($result as $row) {
    print_r($row);
}
