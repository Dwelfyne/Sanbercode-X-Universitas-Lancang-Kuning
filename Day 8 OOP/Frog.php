<?php

require_once("Animal.php");

class Frog extends Animal
{
    public function jump($Jump){
        return "Jump : $Jump <br><br>";
    }
} 


?>