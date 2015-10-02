<?php

namespace application\animaux;

class Chat extends Animal
{


    private $cool;

    public function __construct()
    {
        echo "<br> Chat toutcourt";
    }


    public function crier()
    {
        echo" Miaou!";
    }
}


?>