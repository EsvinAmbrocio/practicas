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


    $ramm = Unit::createSoldier()
            ->setWeapon(new Weapons\BasicSword)
            ->setArmor(new Armors\SilverArmor())
            ->setShield();

    $silence = new Unit("Silence",new Weapons\FireBow);
    $silence->attack($ramm);
    $silence->attack($ramm);
    $ramm->attack($silence);

?>