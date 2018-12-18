<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="utf-8" />
        <title>PHP cursus 1</title>
    </head>
        
    <body>
    <?php
    $naam = "Piet Jansen";
    echo "lengte: " . strlen($naam) . "<br>";
    echo "voornaam: " . substr($naam, 0, 4) . "<br>";
    echo "achternaam: " . substr($naam, 5) . "<br>"; 
    ?>
    </body>      
</html>