<?php
namespace Styde;

class Attack 
{
    
    protected $damage;
    protected $magical;
    protected $keyDescription;

    public function __construct($damage, $magical, $keyDescription)
    {
        $this->damage = $damage;
        $this->magical = $magical;
        $this->keyDescription = $keyDescription;
    }

    public function getDescription(Unit $attcker, Unit $opponent)
    {
        return Translator::get($this->keyDescription,[
            'Unit' => $attcker->getName(),
            'opponent' => $opponent->getName(),
        ] );
    }
    public function getDamage()
    {
        return $this->damage;
    }

    public function isMagical()
    {
        return $this->magical;
    }
    public function isPhysical()
    {
        return ! $this->isMagical();
    }
}

