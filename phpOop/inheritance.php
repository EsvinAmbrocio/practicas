<?php

    namespace Styde;

    spl_autoload_register(function($className){
        
        if(strpos($className,'Styde\\') == 0){
            
            $className = str_replace('Styde\\', '',$className);
            
            if(file_exists("src/$className.php")){
                require "src/$className.php";
            };

        }
    });

    require 'vendor/Armor.php';
    require './src/helpers.php';

    $armor = new BronzeArmor();
    $ramm = new Soldier("Ramm");

    $silence = new Archer("Silence");
    $silence->attack($ramm);
    $ramm->setarmor($armor);
    $silence->attack($ramm);
    $ramm->attack($silence)

?>