<?php

$d = new DateTime("yesterday 12:00");

$sql = sprintf(
    "SELECT * FROM users WHERE registered_at BETWEEN '%s' AND '%s'",
    (new DateTime("yesterday 00:00:00"))->format("Y-m-d H:i:s"),
    (new DateTime("yesterday 23:59:59"))->format("Y-m-d H:i:s")
);

echo $sql;