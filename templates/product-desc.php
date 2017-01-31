<main>
    <hr />
    <h1><?= $products[$id]["title"] ?></h1>
    <img
        src="images/<?= $products[$id]["picture"] ?>"
        alt="photo de <?= $products[$id]["title"] ?>"
    />
    <p><?= $products[$id]["long_desc"] ?></p>
    <p>Ne ratez pas cette occasion au prix incroyable de :
        <strong class="new-price"><?= number_format($products[$id]["promo_price"], 2) ?></strong> &euro;
        au lieu de
        <del class="old-price"><?= number_format($products[$id]["price"], 2) ?></del> &euro;
    </p>
</main>
