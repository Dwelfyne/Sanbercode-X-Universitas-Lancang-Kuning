<?php
class Animal
{
    public $legs = 4;
    public $cold_blooded = "No";
    public $nama;

    public function __construct($animal)
    {
        $this->nama = $animal;
    }
}

?>