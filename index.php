<?php

function FormateFrenchDate(DateTime $date):string
{
  $days = array("dimanche", "lundi", "mardi", "mercredi", "jeudi", "vendredi", "samedi");

  $months = ["", "janvier", "février", "mars", "avril", "mai", "juin", "juillet", "août",
          "septembre", "octobre", "novembre", "décembre"];

  return $days[$date->format('w')] . " " .$date->format('d') ." ". $months[(int) $date->format('m')] ." ". $date->format('Y');

}

function diffDate(string $date)
{
  $now = new DateTime();
  $datetime1 = new DateTime($date);
  $interval = $now->diff($datetime1);
  return $interval->format('%y Year %m Month %d Day');
}


$date = new DateTime();

echo $date->format('Y-m-d') . '<br>';

echo $date->format("d/m/Y") . '<br>';

echo $date->format('Y-m-d h:i:s') . '<br>';

echo $date->format('d/m/y, h:i') . '<br>';

echo FormateFrenchDate($date). '<br>';

$date = new DateTime('2030-12-25');
echo FormateFrenchDate($date). '<br>';

$date = new DateTime('1984-1-01');
echo FormateFrenchDate($date). '<br>';


echo diffDate('1999-03-15'). '<br>';
echo diffDate('1860-01-22'). '<br>';
echo diffDate('1991-02-02'). '<br>';


$person = [
  ['name'=> "Laura",'age' => 28, 'sexe' =>'Femme'],
  ['name'=> "Pierre",'age' => 38, 'sexe' =>'Homme'],
  ['name'=> "Rihab",'age' => 21, 'sexe' =>'Femme'],

];

foreach ($person as $infos){
  echo "Je m'appelle " .
  $infos['name'] .
   " j'ai ".
  $infos['age'] .
  " ans et je suis un(e) " .
  $infos['sexe'] .
  "<br>" ;
}

for ($numero = 0; $numero < count($person); $numero++){
  if ($person[$numero]['age'] > 22){
    echo  "Hello, I'm " . $person[$numero]['name'] , '<br/>';
  }
}




for ($i=1 ; $i<=8 ; $i++) { // construit 8 lignes

  for ($j=1 ; $j<=8 ; $j++) {// tu démarres de 0, tant que i est inférieur à 8 affiches 8 étoiles..
      if ($j > $i)// pour faire un triangle rectangle
          echo '*'; // nouveau for construit 8 étoiles dans chaque lignes (carré)

      }
        echo '<br>';
}






?>
