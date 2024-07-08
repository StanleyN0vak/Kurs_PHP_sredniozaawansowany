<?php

use Symfony\Component\Validator\Constraints\Email;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Validation;

require "vendor/autoload.php";
?>

<form method="post">
    text:<input name="text" type="text"><br>
    email:<input name="email" type="text"><br>
    color:<input name="color" type="color"><br>
    date:<input name="date" type="date"><br>
    tel:<input name="tel" type="tel"><br>
    <input type="submit"><br>
</form>

<?php

if ($_POST){
    $validator = Validation::createValidator();
    $errors = [];
    $errors[] = $validator->validate(
        $_POST['text'],
        [
            new Length(["min" => 3])
        ]
    );
    $errors[] = $validator->validate(
        $_POST['email'],
        [
            new NotBlank(),
            new Email()
        ]
    );

    echo "<pre>" . print_r($errors, true) . "</pre>";

    var_dump($_POST);
}