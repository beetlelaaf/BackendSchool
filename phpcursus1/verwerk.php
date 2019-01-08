<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Formulier verwerken</title>
</head>

<body>
    <table>
        <?php
        
        //Processing the name input / output name
        if(isset($_POST['naam']) &&  filter_var($_POST['naam'], FILTER_SANITIZE_STRING) ) { $naam = $_POST['naam'];
          echo "<tr><td>Naam: </td><td>" . $_POST['naam'] . "</td></tr>\n";
        } else {
          echo "<tr><td>Naam: </td><td><em>Vul een naam in!</em></td></tr>\n";
        }

        //processing the e-mail input / output e-meail
        if (isset($_POST['email'])  && filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) ) { $email = $_POST['email'];
        echo "<tr><td>E-mail: </td><td>" . $_POST['email'] . "</td></tr>\n";
        } else {
        echo "<tr><td>E-mail: </td><td><em>Geen geldige E-mail!</em></td></tr>\n"; 
        }

        //output reactie
        if(isset($_POST['reactie']) &&  filter_var($_POST['reactie'], FILTER_SANITIZE_STRING) ) { $reactie = ($_POST['reactie']);
            echo "<tr><td>Reactie: </td><td>" . $_POST['reactie'] . "</td></tr>\n";
        } else {
            echo "<tr><td>Reactie: </td><td><em>Vul een reactie in!</em></td></tr>\n";
        }

        ?>
    </table>
</body>
</html>