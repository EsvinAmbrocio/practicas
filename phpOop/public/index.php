<?php

    namespace Styde;

    require '../vendor/autoload.php';

    $armor = new Armors\SilverArmor;
    $ramm = new Unit("Ramm",new Weapons\BasicSword);

    $silence = new Unit("Silence",new Weapons\FireBow);
    $ramm->setarmor($armor);
    $silence->attack($ramm);
    $silence->attack($ramm);
    $ramm->attack($silence);

?>