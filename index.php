<?php

require_once('class_heineken.php');

$biere = new Biere("Biere de test", "moyenne", -8);
$leffe = new Leffe("Leffe", "blonde", 3, "l'abbaye de Leffe", "Pour un maximum de saveur, dégustez-la dans son verre Leffe associé !");
$paixdieu = new Paixdieu("Paix-Dieu", "triple", 4, "les jours de pleine lune", "la bouteille est classe");
$orval = new Orval("Orval", "d'exception", 4, "à une température comprise entre 10 et 15°C", "elle est fermentée dans des cuves spéciales", "se boit aussi tempéré");
$heineken = new Heineken("Heineken", "euh bah non en fait c'est de la pisse", 42, "tu es mourant ou tu n'as plus de palais", "Se miner au caps", "L'abus d'Heineken est dangereux pour la santé, à consommer avec modération");

$biere->affiche();
$leffe->affiche();
$paixdieu->affiche();
$orval->affiche();
$heineken->affiche();

?>
