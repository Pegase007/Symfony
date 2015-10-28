<?php

namespace TroisWA\BackBundle\Validator;

use Symfony\Component\Validator\Constraint;



/**
 *
 * permet d'utiliser cette constraintes en annotations
 * @Annotation
 */
class CategoryPosition extends Constraint
{

        public $message = "La position existe déjà";

        public function validatedBy()
        {
//                permet de récuperer le service
                return 'troiswa_back_category_position';

        }


}
