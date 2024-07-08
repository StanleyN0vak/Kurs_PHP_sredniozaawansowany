<?php

$password = "123456";

echo "<p>{$password}</p>" . PHP_EOL;
echo "<p>" . md5($password) . "</p>";
echo "<p>" . password_hash($password, PASSWORD_DEFAULT) . "</p>";
echo "<p>" . password_hash($password, PASSWORD_BCRYPT) . "</p>";

var_dump(password_verify($password, password_hash($password, PASSWORD_DEFAULT)));
var_dump(password_verify($password, password_hash($password, PASSWORD_BCRYPT)));

var_dump(password_verify(12345, '$2y$10$SXn/a17.iaOQwhKRAJUZDOUifhwkQPvOHyGwxg04OdRXGUBHvA4AS'));