<?php
include("inc/data.php");
$id = (isset($_GET["id"])) ? $_GET["id"] : 0;
include("templates/header.php");
include("templates/product-desc.php");
include("templates/footer.php");
?>
