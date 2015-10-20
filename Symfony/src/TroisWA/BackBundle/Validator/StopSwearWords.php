<?php

namespace TroisWA\BackBundle\Validator;

use Symfony\Component\Validator\Constraint;



/**
 *
 * permet d'utiliser cette constraintes en annotations
 * @Annotation
 */
class StopSwearWords extends Constraint
{

//    Tous ces messages peuvent etre surchargés dans entity
//    public $message = "Un gros mot a été trouvé";
//
//
//    public $minmessage = "Un gros mot a été trouvé";
//
//    public $toto = 2;



        public $message = "Careful...do not swear.";


}
