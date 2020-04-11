<?php

namespace Styde;

class Person
{
    protected $name;

    protected static $database = 'mysql';

    public $table = 'people';


    public function __construct($name)
    {
        $this->name = $name;
    }

    public function name()
    {
        return $this->name;
    }

    public function save()
    {
        echo "saving {$this->name} in the table". $this->table;
    }
}

$duilio = new Person('Duilio');
$duilio->save();

/* Person::$table = 'personas'; */

$ramon = new Person('Ramon');
$ramon->save();

echo"<p>{$duilio->name()}</p>";

echo"<p>{$ramon->name()}</p>";
