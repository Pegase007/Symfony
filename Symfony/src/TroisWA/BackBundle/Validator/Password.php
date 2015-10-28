<?php

namespace TroisWA\BackBundle\Validator;

use Symfony\Component\Validator\Constraint;



/**
 *
 * permet d'utiliser cette constraintes en annotations
 * @Annotation
 */
class Password extends Constraint
{

        public $min =6;
        public $message = "Your password is too short, it must be have at least {{ nb }} characters";


}
