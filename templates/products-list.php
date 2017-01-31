<main>
    <!-- <p>Ici se tiendra la liste de mes articles !</p> -->
    <!-- Objectif de l'aprèm : afficher la liste des articles ici -->
    <!-- Loupe = lien qui affiche le détail d'un produit  -->
    <!-- Bouton ajouter au panier pour plus tard -->

    <!-- un article par produit -->
    <?php foreach ($products as $key => $product): ?>
        <hr>
        <article class="product">
            <h2><?= $product["title"] ?></h2>
            <img
                src="images/<?= $product["thumbnail"] ?>"
                alt="miniature de <?= $product["title"] ?>"
            />
            <p><?= $product["short_desc"] ?></p>
            <p>
                <?php if ($product["price"] != $product["promo_price"]): ?>
                    <ins class="new-price"><?= number_format($product["promo_price"], 2) ?> €</ins>
                    <span class="old-price"><?= number_format($product["price"], 2) ?> €</span>
                <?php else: ?>
                    <span class="old-price"><?= number_format($product["price"], 2) ?> €</span>
                <?php endif; ?>
            </p>
            <p>
                <a href="product.php?id=<?= $key ?>"><i class="fa fa-search" aria-hidden="true"></i></a>
                <button type="button" name="add">Ajouter au panier</button>
            </p>
        </article>
    <?php endforeach; ?>
</main>
