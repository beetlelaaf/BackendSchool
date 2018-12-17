<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <title>Datatypes</title>
</head>

<body style="background-color: black; color: white;">
  <h3>lab 1.4</h3>
  <?php
       //variables
       $naam = array("Karim", "Sophie");
       $nederlands = array("8.5", "8.9");
       $engels = array("7.7", "8.7");
       $rekenen = array("6.7", "9.7");
       $programmeren = array("8.5", "9.5");
       $databases = array("9.4", "9.2");

       //Gemiddelde optellen in array
       $gemiddelde = array($nederlands[0] + $engels[0] + $rekenen[0] + $programmeren[0]
        + $databases[1], $nederlands[1] + $engels[1] + $rekenen[1] + $programmeren[1] + $databases[1]);

       //gemidelde berekenen  
       $gemiddelde[0] = $gemiddelde[0] / 5;
       $gemiddelde[1] = $gemiddelde[1] / 5;

       //groepsgemiddelde berekenen
       $groepgem = $gemiddelde[0] + $gemiddelde[1];
       $groepgem = $groepgem / 2;
       
       //show
       echo "<table border='1'> 
       <caption>
       <strong>Rapport</strong>
       </caption>
         <thead>
           <tr>
             <th>Naam</th><th>Nederland</th><th>Engels</th><th>Rekenen</th>
             <th>programmeren</th><th>Databases</th><th>Gemiddelde</th>
           </tr>       
         </thead> 
         <tbody>
           <tr>
             <td>$naam[0]</td><td>$nederlands[0]</td><td>$engels[0]</td>
             <td>$rekenen[0]</td><td>$programmeren[0]</td><td>$databases[0]</td><td>$gemiddelde[0]</td>   
           </tr>
           <tr>
           <td>$naam[1]</td><td>$nederlands[1]</td><td>$engels[1]</td>
           <td>$rekenen[1]</td><td>$programmeren[1]</td><td>$databases[1]</td><td>$gemiddelde[1]</td>   
         </tr>
         </tbody>
         <tfoot>
           <tr>
             <td colspan='6'>Groep Gemiddeld</td><td>$groepgem</td>
           </tr>
         </tfoot>
       </caption>";
    ?>
</body>

</html>