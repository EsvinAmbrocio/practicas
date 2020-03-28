<?php

    namespace Styde;

    require '../vendor/autoload.php';

    $armor = new Armors\BronzeArmor();
    $ramm = new Soldier("Ramm");

    $silence = new Archer("Silence");
    $silence->attack($ramm);
    $ramm->setarmor($armor);
    $silence->attack($ramm);
    $ramm->attack($silence)

?>