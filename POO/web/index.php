<?php

use application\animaux\Chat;

//============================INCLUDE CLASSIQUE==========================//

//include "../src/application/animaux/Animal.php";

//===============================AUTOLOAD MANUEL =========================//
//function myAutoload($className)
//{
//
//    include "../src/application/animaux/".$className.".php";
////    exit(var_dump($className));
//
//}
//
//spl_autoload_register("myAutoload");


//===========================FAIRE APPEL A AUTOLOAD=========================/

require_once"../vendor/autoload.php";



$animal=new application\animaux\Animal();
$chat=new Chat();
$cat=new lib\toto\Chat();




?>