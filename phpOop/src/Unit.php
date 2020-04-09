<?php

namespace Styde;

Class Unit{
    protected $hp = 40;
    protected $name;
    protected $armor;
    protected $weapon;

    public function __construct($name, Weapon $weapon ){
        $this->name = $name;
        $this->weapon = $weapon;
        $this->armor = new Armors\MissingArmor();
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
       
       $attack = $this->weapon->createAttack();

        show($attack->getDescription($this, $opponent));
        
        $opponent->takeDamage($attack);

    }

    public function takeDamage(Attack $attack){
        
        $this->hp = $this->hp - $this->armor->absorbDamage($attack);
        show("{$this->name} ahora tiene {$this->hp} puntos de vida");
    
        if($this->hp <= 0){
            $this->die();
        } 
    }
    public function die(){
        show("{$this->name} muere");
        exit();
    }

};
