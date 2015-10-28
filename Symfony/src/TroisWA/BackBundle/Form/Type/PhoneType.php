<?php
namespace TroisWA\BackBundle\Form\Type;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PhoneType extends AbstractType
{
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            "attr" => ["class" => "phoneNumber"]
        ]);
    }

    public function getName()
    {
        return 'phone';
    }

    public function getParent()
    {
        return 'text';
    }
}

