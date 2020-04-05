<?php

namespace Styde\Weapons;

use Styde\Weapon;
use Styde\Unit;

class BasicSword extends Weapon{

    protected $damage = 40;

    public function getDescription(Unit $attacker, Unit $opponent ){
        /* var_dump($attacker);
        exit(); */

        return "{$attacker->getName()} ataca con la espada a {$opponent->getName()}";
    }

}
