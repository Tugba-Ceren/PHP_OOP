<!DOCTYPE html>
<html lang="eng">
    <head>
        <meta charset="utf-8">
        <meta name ="viewport " content="width=device-width , initial-scale=1.0">
        <title>Document</title>

    </head>
    <body>
        <?php
        $Brand="Volvo";
        $Color="Green";
        function getCarInfo($Brand,$Color){
            return "Brand: ". $Brand.", Color:". $Color;
        }
        echo getCarInfo($Brand, $Color);
        ?>


    </body>
</html>
