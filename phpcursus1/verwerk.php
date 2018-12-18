<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Formulier verwerken</title>
</head>

<body>
    <table>
        <?php
        
        if(isset($_POST['naam']) && $_POST['naam'] != '') {
          $naam = filter_var($_POST['naam'], FILTER_SANITIZE_STRING);
          echo "<tr><td>Naam: </td><td>" . $naam . "</td></tr>";
        } else {
          echo "<tr><td>Naam: </td><td><em>Vul een naam in!</em></td></tr>";
        }
        if ( isset($_POST['email'])  && filter_var($_POST['email'],  FILTER_VALIDATE_EMAIL)) {
        echo "<tr><td>E-mail: </td><td>" . $_POST['email'] . "</td></tr>";
        } else {
        echo "<tr><td>E-mail: </td><td><em>Geen geldige E-mail!</em></td></tr>"; 
        }

        echo "<tr><td>Reactie: </td><td>" . $_POST['reactie'] . "</td></tr>";

        ?>
    </table>
</body>
</html>