<main>
    <hr />
    <h1><?= $products[$nbProduct]["title"] ?></h1>
    <img src="images/<?= $products[$nbProduct]["picture"] ?>" alt="">
    <p><?= $products[$nbProduct]["long_desc"] ?></p>
    <p>Ne ratez pas cette occasion au prix incroyable de :
        <strong class="new-price"><?= number_format($products[$nbProduct]["promo_price"], 2) ?></strong> &euro;
        au lieu de
        <del class="old-price"><?= number_format($products[$nbProduct]["price"], 2) ?></del> &euro;
    </p>
    <hr />
</main>
