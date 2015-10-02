<?php

use application\animaux\Chat;
use \Symfony\Component\VarDumper\Test\VarDumperTestTrait;
use Symfony\Component\Templating\PhpEngine;
use Symfony\Component\Templating\TemplateNameParser;
use Symfony\Component\Templating\Loader\FilesystemLoader;
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



//$animal=new application\animaux\Animal();
$chat=new Chat();
$chat->crier();
$cat=new lib\toto\Chat();

dump($chat);

$loader = new FilesystemLoader(__DIR__.'/views/%name%');
$templating = new PhpEngine(new TemplateNameParser(), $loader);
echo $templating->render("hello.php",["firstname"=>"Fabien"]);


?>