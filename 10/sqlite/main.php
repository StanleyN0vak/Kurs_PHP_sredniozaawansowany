<?php

$db = new SQLite3("data.db");

$sql = "select * from products;";

$statement = $db->prepare($sql);
$result = $statement->execute();

while ($row = $result->fetchArray(SQLITE3_ASSOC)){
    print_r($row);
}