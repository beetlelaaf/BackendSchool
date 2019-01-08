<!DOCTYPE html>
<html>
    <head>
        <title>Formulier</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <form
            name="reactie formulier" method="post" action="verwerk.php">
            <table width="300" border="0">
                <tbody>
                    <tr>
                        <td>Naam:</td>
                        <td><input type="text" name="naam"></td>
                    </tr>

                    <tr>
                        <td>E-mail:</td>
                        <td><input type="text" name="email"></td>
                    </tr>

                    <tr>
                        <td>Reactie:</td>
                        <td><textarea name="reactie" rows="8" cols="43"></textarea></td>
                    </tr>

                    <tr>
                        <td></td>
                        <td><input type="submit" value="verstuur"></td>
                    </tr>
            </table>
        </form>
    </body>
</html>