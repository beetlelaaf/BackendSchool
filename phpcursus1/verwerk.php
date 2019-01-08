<html> 
    <head> 
        <title>Formulier verwerken</title> 
    </head> 
    <body>
        <table> 
            <?php 
            if (isset($_POST["naam"]) && filter_var($_POST["naam"], FILTER_SANITIZE_STRING) ) { $naam = $_POST["naam"];
            echo "<tr><td>Naam: </td><td>" . $_POST["naam"]  . "</td></tr>\n";}
            else {
                echo "<tr><td>Naam: </td><td><em>Vul een naam in!</em></td></tr>\n";
            }
            if (isset($_POST["email"]) && filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) ) { $email = $_POST["naam"];
            echo "<tr><td>Email: </td><td>" . $_POST["email"]  . "</td></tr>\n";}
            else {
                echo "<tr><td>Email: </td><td><em>Vul een email in!</em></td></tr>\n";
            }
            if (isset($_POST["reactie"]) && filter_var($_POST["reactie"], FILTER_SANITIZE_STRING) )  { $reactie = $_POST["reactie"];
            echo "<tr><td>Reactie: </td><td>" . $_POST["reactie"]  . "</td></tr>\n";}
            else {
                echo "<tr><td>Reactie: </td><td><em>Vul een reactie in!</em></td></tr>\n";
            }
            ?> 
        </table> 
    </body> 
</html>
