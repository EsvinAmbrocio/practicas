<?php

    namespace Styde;

    require '../vendor/autoload.php';

    Translator::set([
        'BasicBowAttack'=>':Unit dispara un flecha :opponent',
        'BasicSwordAttack'=> ':Unit ataca con la espada a :opponent',
        'CrossBowAttack'=>':Unit dispara un flecha :opponent',
        'FireBowAttack'=>':Unit dispara un flecha de fuego a :opponent',
        'takeDamage' => ':Unit ahora tiene :hp puntos de vida',
        'die'=> ':Unit muere',
        'move'=>':Unit avanza hacia :direction'
    ]);


    $armor = new Armors\SilverArmor;
    $ramm = new Unit("Ramm",new Weapons\BasicSword);

    $silence = new Unit("Silence",new Weapons\FireBow);
    $ramm->setarmor($armor);
    $silence->attack($ramm);
    $silence->attack($ramm);
    $ramm->attack($silence);

?>