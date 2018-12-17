<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <title>Datatypes</title>
</head>

<body style="background-color: black; color: white;">
  <h3>lab 1.05</h3>
  <?php
    $num = ['een', 'twee', 3, 'vier'];
    array_push($num, 5);
    print_r($num);

    echo ('<br>' . gettype($num[4]) . '<br>');
    array_pop($num);
    print_r($num);

    array_unshift($num, 'nul');
    echo('<br>');
    print_r($num);

    echo('<br>');
    unset($num[0]);
    echo('Datatype van $num[0] is: ' . gettype($num[0]) . '<br>');
    print_r($num);

    echo('<br>');
    unset($num[2]);
    print_r($num);

    echo('<br>');
    array_pop($num);
    print_r($num);

  ?>
</body>

</html>