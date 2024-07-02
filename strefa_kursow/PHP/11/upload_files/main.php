<?php

require "vendor/autoload.php";


$request = \Symfony\Component\HttpFoundation\Request::createFromGlobals();

/** @var \Symfony\Component\HttpFoundation\File\UploadedFile $file */
$file = $request->files->get("file");

$file->move(".", $file->getClientOriginalName());

?>

<form method="post" enctype="multipart/form-data">
    <input type="file" name="file">
    <input type="submit">
</form>
