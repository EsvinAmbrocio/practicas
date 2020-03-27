<?php

namespace Styde;
use Warcraft\Armor;

class BronzeArmor implements Armor{
    public function absorbDamage($damage){
        return $damage/2;
    }
};
