<?php

namespace TroisWA\BackBundle\Validator;

use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;

class PasswordValidator extends ConstraintValidator


{
    public function validate($value, Constraint $constraint)
    {
        if (strlen($value) < $constraint->min)
        {
            $this->context->buildViolation($constraint->message)
                ->setParameter('{{ nb }}', $constraint->min)
                ->addViolation();
        }

    }


}