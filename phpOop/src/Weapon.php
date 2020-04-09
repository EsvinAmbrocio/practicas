<?php

namespace Styde;

abstract class Weapon{
    protected $damage = 0;
    protected $magical = false;
    protected $description = ':Unit  ataca a :opponent';

    public function createAttack(){
        return new Attack($this->damage, $this->magical, $this->description);
    }
     
}