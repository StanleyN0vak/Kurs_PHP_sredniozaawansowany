<?php

use Symfony\Component\HttpFoundation\Request;

require "vendor/autoload.php";

$request = Request::createFromGlobals();

/** @var \Symfony\Component\HttpFoundation\File\UploadedFile $file */
$file = $request->files->get("file");

var_dump($file->isValid());

$file->move(".", $file->getClientOriginalName());

var_dump($request->files->get("file"));

/*
if ($_FILES){
    var_dump($_FILES);

    move_uploaded_file($_FILES["file"]["tmp_name"], $_FILES["file"]["name"]);
}
*/

?>

<form method="post" enctype="multipart/form-data">
    <input type="file" name="file">
    <input type="submit">
</form>