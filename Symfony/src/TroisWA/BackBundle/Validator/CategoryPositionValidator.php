<?php

namespace TroisWA\BackBundle\Validator;

use Doctrine\ORM\EntityManager;
use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;

class CategoryPositionValidator extends ConstraintValidator
{
    private $em;

    public function __construct(EntityManager $em)
    {
//        ceci permet de récupere doctrine
        $this->em = $em;

    }


    public function validate($value, Constraint $constraint)
    {

//        die(dump($this->em));
        $position=$this->em->getRepository('TroisWABackBundle:Category')->findOneByPosition($value);

        if($position)
        {

            $this->context->buildViolation($constraint->message)
                ->addViolation();
        }

    }

}