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
  "Aisne" => "02",
  "Nord" => "59",
  "Oise" => "60",
  "Pas-de-calais" => "62",
  "Somme" => "80",
);

echo $depart {"Aisne"};
    ?></p>

</body>
</html>
