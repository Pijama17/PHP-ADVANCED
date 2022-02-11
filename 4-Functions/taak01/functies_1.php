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

schrijfKleur("#FF0000");
schrijfKleur("green");
schrijfKleur("#0000FF");
schrijfKleur("yellow");
function schrijfKleur($kleur){
    echo "<div style=\"color:".$kleur."; \">Deze tekst heeft de kleur $kleur</div>";
}
?>

</body>
</html>
