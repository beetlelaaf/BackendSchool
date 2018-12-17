<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="utf-8" />
        <title>Array's</title>
    </head>
        
    <body style="background-color: black; color: white;">
    <?php
    
    echo "<br>---- Opgave 5";

    $producten = [];
    $producten[0] = "Boeken";
    $producten[1] = "CD's";
    $producten[2] = "Smartphones";
    $producten[3] = "DVD's";
 
    echo "<br>---- Opgave 6: print_r() ";
    print_r($producten);

    echo "<br>---- Opgave 7: var_dump() ";
    var_dump($producten);

    echo "<br>---- Opgave 8: var_dump() ";
    unset($producten[2]);
    print_r($producten);

    echo "<br>---- Opgave 9: array_key_exist() ";
    $gevonden = array_key_exists(1, $producten);
    echo "Key 1 gevonden?: " . $gevonden;

    echo "<br>---- Opgave 10: in_array() "; 
    $gevonden = in_array('Boeken', $producten);
    echo "Boeken gevonden?: " . $gevonden;

    echo "<br>---- Opgave 11: array_search() ";
    $index = array_search("CD's", $producten);
    echo "De index van CD's is: " . $index; 

    echo "<br>---- Opgave 12: array_push() ";
    array_push($producten, "Laptops", "Tablets");
    print_r($producten);

    echo "<br>---- Opgave 13: array_pop() ";
    $laatsteElement = array_pop($producten);
    echo $laatsteElement . " is verwijderd ";
    print_r($producten);

    echo "<br>---- Opgave 14: array_shift() ";
    $eersteElement = array_shift($producten);
    echo $eersteElement . " verwijderd: ";
    print_r($producten);

    echo "<br>---- Opgave 15: array_unshift() ";
    array_unshift($producten, "TV's", "Stereo's");
    echo "TV's en Stereo's toegevoegd: ";
    print_r($producten);

    echo "<br>---- Opgave 16: ";
    $random_key = array_rand($producten, 2);
    echo "<br />Eerste random product: " . $producten[$random_key[0]];
    echo "<br />Tweede random product: " . $producten[$random_key[1]];

    function printArray($item, $key) {
        echo "<br>$key" . ": " . "<i>$item</i>";
    }
    echo "<br>---- Opgave 17: Producten Array doorlopen: "; 
    array_walk($producten, 'printarray');

    $getallen = ["nul", "een", "twee", "drie", "vier", "vijf"];
    $tools = ["boel", "pen", "laptop", "potlood"];
    $tekst1 = implode("*", $getallen);
    echo "<br>---- Opgave 18: Array getallen in tekst1 converteren: $tekst1"; 
    $tekst2 = implode("|", $tools);
    echo "<br>---- Opgave 18: Array getallen in tekst2 converteren: $tekst2";
    
    echo "<br>---- Opgave 19: tekst1 in array1 converteren:";
    $array1 = explode("*", $tekst1);
    array_walk($array1, 'printarray');
    echo "<br>---- Opgave 19: tekst2 in array2 converteren:";
    $array2 = explode("|", $tekst2);
    array_walk($array2, 'printarray');

    $boeken = array(
        array("titel" => "Stoner", "auteur" => "John Williams", "genre" => "Fictie", "prijs" => 19.99),
        array("titel" => "De cirkel", "auteur" => "Dave Eggers", "genre" => "Fictie", "prijs" => 22.50),
        array("titel" => "Rayuela", "auteur" => "Julio Cortazar", "genre" => "Fictie", "prijs" => 25.50)
    );
    echo "<br>---- Opgave 20: Boeken-array aangemaakt";

    echo "<br>---- Opgave 21: Boeken recursief doorlopen";
    array_walk_recursive($boeken, 'printArray');

    $nieuweboeken = array(
        array("titel" => "Spijt", "auteur" => "Carry Slee", "genre" => "Fictie", "prijs" => 29.99),
        array("titel" => "Debet", "auteur" => "Saskia Noort", "genre" => "Fictie", "prijs" => 33.50)
    );
    echo "<br>---- Opgave 22: Twee Array's samenvoegen";
    $boeken = array_merge($boeken, $nieuweboeken);
    array_walk_recursive($boeken, 'printArray');

    echo "<br>---- Opgave 23: Array elements kopiëren";
    $oudeboeken = array_slice($boeken, 0, 2);
    array_walk_recursive($oudeboeken, 'printArray');

    ?>
    </body>
        
</html> 