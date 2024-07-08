<?php
$users = [
    "Ściana",
    "Lidia",
    "Wiktor",
    "Magda",
    "Kacper",
    "Halina",
    "Tomasz",
    "Lidia"
];

foreach ($users as $user){
    echo sprintf(
        "<p style='color:#%s'>%s</p>",
        substr(md5($user), 0, 6),
        $user
    );
}