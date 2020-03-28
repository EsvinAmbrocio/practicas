<?php

namespace Armors\Styde;
use Styde\Armor;

class SilverArmor implements Armor{
    public function absorbDamage($damage){
        return $damage/3;
    }
};
