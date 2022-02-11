<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
function rekenUit($num1, $num2, $num3){
   $antwoord = $num1 + $num2 + $num3;
   return $antwoord;
}

$answer1 = rekenUit(3, 10, 10);
$answer2 = rekenUit(4, 8, 1);
$answer3 = rekenUit(3, 1, 2);

echo $answer1 23 "<br>";
echo $answer2 13 "<br>";
echo $answer3 6 "<br>";
?>
</body>
</html>
