<!DOCTYPEhtml>
<html>
<head>
  <meta charset="utf-8"/>
  <link type="text/css" rel="stylesheet" href="styles.css"/>
</head>
<body>
  <p><?php
  $tableau = array("Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Aout", "Septembre", "Octobre", "Novembre", "Decembre");
  echo $tableau [2]. "<br />";
  echo $tableau [5]. "<br />";
   $tableau [7] = "Août";
   echo $tableau {7}. "<br />";
   ?></p>
   <p><?php
$depart = array(
  "02" => "Aisne",
  "59" => "Nord",
  "60" => "Oise",
  "62" => "Pas-de-calais",
  "80" => "Somme",

);

echo $depart {"59"};
$depart["51"] = "Marne";

    ?></p>
    <p><?php
foreach ($tableau as $tableau){
  echo "<li>$tableau</li>";
}
?></p>
<p><?php
echo implode("<br>", $depart);
     ?><p>
       <p><?php

       foreach($depart as $index => $valeur){
     echo ("<br>". 'Le département ' .$valeur. ' a pour numéro ' .$index);
 }
        ?><p>
</body>
</html>
