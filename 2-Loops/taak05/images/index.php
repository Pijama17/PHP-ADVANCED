<?php
$students = [
  'voornaam'   =>"jane",
  'achternaam' =>"Janssen",
  'klas'       =>"9A",
  'Leeftijd'   =>17,
  'Woonplaats' =>"Amstelveen"
];
foreach($students as $key => $value){
    echo $key . ": " . $value . "<br>";
}