<html>
    <head>
        <title>Pierwszy skrypt</title>
    </head>
    <body>
        <?php
        $menu = [
            "Strona Główna",
            "O nas",
            "Kontakt"
        ];

        foreach ($menu as $item){
            echo $item . "<br>";
        }
        ?>
    </body>
</html>