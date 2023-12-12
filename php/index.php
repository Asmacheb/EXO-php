<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php echo "<div><h1>HELLO</h1></div>";

    $Nom="Chebaiki";
     $Prénom="Asma";
    $Age="24";
    $Taille="1m68";
    

//    echo $Nom,"<br>",$Prénom,"<br>",$Age+2,"ans","<br>",$Taille;

echo $Prénom . ' ' . $Nom . ' ' . $Age . ' ' . $Taille;
   ?>
<!-- Exercice 2 :

Reprenez le premier exercice et à l'aide de la concaténation, affectez le tout à une nouvelle variable.
Affichez cette nouvelle variable à l'aide de la fonction var_dump() -->

<?php 

$Info= "$Prénom" . ' ' . "$Nom" . ' ' . "$Age" . ' ' . "$Taille";
echo "<br>";
var_dump($Info);

?>

<!-- Exercice 3 :

Mathéo a une moyenne de 15,4 , Nathan de 9,2 , Léo de 16,1 et Maxime de 12,6. Calculez la moyenne de ces 4 personnes -->
<?php 
echo "<br>";
$Matheo=15.4;
$Nathan=9.2;
$Léo=16.1;
$Maxime=12.6;

$Total = "Moyenne =".($Matheo+$Nathan+$Léo+$Maxime)/ 4;


echo $Total;

?>
<!-- 
Exercice 4 :

Affichez moi dans la page de votre navigateur un chiffre aléatoire compris entre 1 et 12000 -->
<?php 

echo "<br>";

$nombreAleatoire = rand(1, 100);

// Afficher le résultat
echo "Nombre aléatoire : $nombreAleatoire";

?>
    
</body>
</html>