<?php

namespace Styde;

Class Unit{
    protected const MAX_DAMAGE = 10;
    protected $hp = 40;
    protected $name;
    protected $armor;
    protected $weapon;

    public function __construct($name, Weapon $weapon ){
        $this->name = $name;
        $this->weapon = $weapon;
        $this->armor = new Armors\MissingArmor();
    }

    public static function createSoldier()
    {
        $soldier = new Unit('Ramm',new Weapons\BasicSword);
        $soldier->setArmor( new Armors\BronzeArmor );

        return $soldier;
    }

    public function setWeapon(Weapon $weapon)
    {
        $this->weapon = $weapon;

        return $this;
    }

    public function setArmor(Armor $armor = null){
        $this->armor = $armor;

        return $this;
    }

    public function setShield()
    {
        return $this;
    }
    public function getHp(){
        return $this->hp;
    }

    public function getName(){
        return $this->name;
    }

    public function move($direction){
        Log::info($this->getDescription(__FUNCTION__, $direction));
    }

    public function attack(Unit $opponent){
       
       $attack = $this->weapon->createAttack();

       Log::info($attack->getDescription($this, $opponent));
        
        $opponent->takeDamage($attack);

    }

    public function takeDamage(Attack $attack){
    
        $this->setHp($this->absorbDamage($attack));

        Log::info($this->getDescription(__FUNCTION__));

        if($this->hp <= 0){
            $this->die();
        } 
    }

    protected function setHp($damage)
    {
        if ($damage > static::MAX_DAMAGE) {
            $damage = static::MAX_DAMAGE;
        }

        $this->hp = $this->hp - $damage;
    }
    public function die(){
        Log::info($this->getDescription(__FUNCTION__));
        exit();
    }

    protected function absorbDamage(Attack $attack){
        if($this->armor){
            return $this->armor->absorbDamage($attack);
        }
        return $attack->getDamage();
    }

    protected function getDescription($keyDescription, $direction= null)
    {
        return Translator::get($keyDescription,[
            'Unit' => $this->getName(),
            'hp' => $this->getHp(),
            'direction'=>$direction
        ] );
    }
};
