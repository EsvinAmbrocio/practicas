<?php

namespace Styde;

abstract Class Unit{
    protected $hp = 40;
    protected $name;
    protected $armor;
    protected $weapon;

    public function __construct($name, Weapon $weapon ){
        $this->name = $name;
        $this->weapon = $weapon;
    }

    public function setWeapon(Weapon $weapon)
    {
        $this->weapon = $weapon;
    }

    public function setarmor(Armor $armor = null){
        $this->armor = $armor;
    }

    public function getHp(){
        return $this->hp;
    }

    public function getName(){
        return $this->name;
    }

    public function move($direction){
        show("{$this->name} avanza hacia $direction");
    }

    public function attack(Unit $opponent){
       
        if(! $this->weapon){

            throw new \Exception("The unit has no weapons");

        }
        show($this->weapon->getDescription($this, $opponent));
        
        $opponent->takeDamage($this->weapon->getDamage());

    }

    public function takeDamage($damage){
        
        $this->hp = $this->hp - $this->absorbDamage($damage);
        show("{$this->name} ahora tiene {$this->hp} puntos de vida");
    
        if($this->hp <= 0){
            $this->die();
        } 
    }
    public function die(){
        show("{$this->name} muere");
        exit();
    }

    protected function absorbDamage($damage){
        if($this->armor){
            $damage = $this->armor->absorbDamage($damage);
        }
        return $damage;
    }
};
