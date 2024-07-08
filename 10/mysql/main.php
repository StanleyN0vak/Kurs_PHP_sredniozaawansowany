<?php

$db = new mysqli("localhost", "root", null, "products");

$sql = "select * from products;";

$statement = $db->prepare($sql);
$statement->execute();
$result = $statement->get_result();

while ($row = $result->fetch_assoc()){
    print_r($row);
}