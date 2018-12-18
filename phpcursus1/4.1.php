<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>PHP cursus 1</title>
</head>

<body>
    <form name="reactie formulier" method="post" action="verwerk.php">
        <table width="300">
            <tbody>
                <tr>
                    <td>Naam:</td>
                    <td><input type="text" name="naam"></td>
                </tr>
                <tr>
                    <td>Email:</td>
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
            </tbody>
        </table>
    </form>
</body>

</html>