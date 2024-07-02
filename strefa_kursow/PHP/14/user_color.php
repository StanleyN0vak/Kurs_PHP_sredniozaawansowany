<?php

$users = [
    "Jan",
    "Magda",
    "Tomasz",
    "Anna",
    "Krzysztof",
    "Halina",
    "Halina",
];

foreach ($users as $user) {
    echo sprintf(
        "<p style='color: #%s'>%s</p>",
        substr(md5($user), 0, 6),
        $user
    );
}
