<?php

require '../vendor/autoload.php';

/** ✅ DEBUT DE LA ZONE À MODIFIER ✅ **/

use App\Arena;
use App\Bow;
use App\Shield;
use App\Weapon;
use App\Monster;
use App\Hero;


$heracles = new Hero('Heracles', 20, 6, 'heracles.svg',6,6,1);
$bird1 = new Monster('Bird', 25, 12, 'bird.svg',2,6,1);
$bird2 = new Monster('Bird', 25, 12, 'bird.svg',4,9,1);
$bird3 = new Monster('Bird', 25, 12, 'bird.svg',3,8,1);
$arena = new Arena([$bird3,$bird2,$bird1],$heracles);

$bow = new Bow();

$sword = new Weapon();
$heracles->setWeapon($bow);

$shield = new Shield();
$heracles->setShield($shield);



/** FIN DE LA ZONE A MODIFIER **/
/** ⛔ Ne pas modifier en dessous ⛔ **/

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Heracles Labours</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <header>
        <h1>Heracles vs Stymphalian Birds</h1>
    </header>
    <main>
        <div class="fighters">
            <a href="#hero">
                <figure class="heracles">
                    <img src="<?= $heracles->getImage() ?>" alt="heracles">
                    <figcaption><?= $heracles->getName() ?></figcaption>
                </figure>
            </a>
        </div>

        <?php include 'map.php' ?>

    </main>

    <?php include 'inventory.php' ?>
</body>

</html>