<?php

namespace TroisWA\BackBundle\Validator;

use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;

class StopSwearWordsValidator extends ConstraintValidator


{
    public function validate($value, Constraint $constraint)
    {

//        die(dump($constraint));


        /*
    if (count($value) < $constraint->min)
    {
      $this->context->buildViolation($constraint->minmessage)
    						->addViolation();
    }
    */


        $grosMots = ["fuck"];
        foreach($grosMots as $mot)
        {
            if (preg_match("#\b(".$mot.")\b#ui", $value))
            {
                $this->context->buildViolation($constraint->message)
                    ->addViolation();
                return;
            }
        }

//         preg_match("#\b(merde|con)\b#ui", $value)
//
//        $this->context->buildViolation('Careful...do not swear')
//            ->addViolation();
    }


}