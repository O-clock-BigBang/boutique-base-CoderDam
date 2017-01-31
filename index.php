<?php
// traitements/données
// `require` provoquera une erreur PHP et pas d'affichage
// s'il n'y a pas de données
// `include` nous permet d'afficher quand même la page
// même si on ne trouve pas le ficher
// `_once` superflux car si on appelle 2 fois,
// ça affichera seulement 2 fois
include("inc/data.php");

// présentation
// pour s'assurer qu'on a accès aux données :
// print_r($products);
include("templates/header.php");
include("templates/products-list.php");
include("templates/footer.php");
?>
