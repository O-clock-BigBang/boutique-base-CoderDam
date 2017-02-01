<?php
include("inc/data.php");

// tester si $_GET n'est pas numérique,
// OU si rien n'est saisi = "id"
// on renvoie vers l'accueil
if (!is_numeric($_GET["id"]) OR !isset($_GET["id"])) {
	header("Location: index.php");
}

// sinon, on récupère le $_GET
$id = $_GET["id"];

// MAIS, s'il n'y a pas de produit à l'index demandé,
// on renvoie aussi vers l'accueil
if (!isset($products[$id])) {
	header("Location: index.php");
}

include("templates/header.php");
include("templates/product-desc.php");
include("templates/footer.php");
?>
