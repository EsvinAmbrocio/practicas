<?php

    namespace Styde;

    require '../vendor/autoload.php';

    $armor = new Armors\BronzeArmor();
    $ramm = new Soldier("Ramm",new Weapons\BasicSword);

    $silence = new Archer("Silence",new Weapons\CrossBow);
    $ramm->setarmor($armor);
    $silence->attack($ramm);
    $silence->attack($ramm);
    $ramm->attack($silence);

?>