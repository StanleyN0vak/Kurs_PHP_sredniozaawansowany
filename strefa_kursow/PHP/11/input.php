<form method="post">
    text: <input name="text" type="text"><br>
    email: <input name="email" type="text"><br>
    color <input name="color" type="color"><br>
    date <input name="date" type="date"><br>
    tel <input name="tel" type="tel"><br>
    <input type="submit">
</form>

<?php

if ($_POST) {
    $text = trim($_POST["text"]);
    if (strlen($text) < 3) {
        echo "text jest za krótki";
    }

    $email = trim($_POST["email"]);
//    if (!preg_match("/[a-z0-9]+@[a-z0-9]+\.[a-z]{2,3}/", $email)) {
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<p>email jest niepoprawny</p>";
    }


    var_dump($_POST);
}
