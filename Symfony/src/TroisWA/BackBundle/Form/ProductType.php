<?php

namespace TroisWA\BackBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use TroisWA\BackBundle\Repository\CategoryRepository;
use TroisWA\BackBundle\Repository\TagsRepository;

class ProductType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title')
            ->add('description')
            ->add('price')
            ->add('dateCreated',"date")
            ->add('quantity')
            ->add('reference')
            ->add('activate', "checkbox")
            ->add('category', 'entity',[
//                "expanded"=>true,
//                "multiple" => false,
                'class' => 'TroisWABackBundle:Category',
                'choice_label' => 'title',
//                "data_class" => 'TroisWA\BackBundle\Entity\Category',
                'query_builder'=>function(CategoryRepository $er){

                    return $er->builderCategoryOrderPosition();
                }])

            ->add('tags','entity', array(
                "multiple"=>true,
                'class' => 'TroisWABackBundle:Tags',
                'choice_label' => 'title',
            ))


            ->add('brand','entity', array(
                'class' => 'TroisWABackBundle:Brand',
                'choice_label' => 'title',
            ));
    }
    
//   DEPRECIE!!!
//    public function setDefaultOptions(OptionsResolverInterface $resolver)
//    {
//        $resolver->setDefaults(array(
//            'data_class' => 'TroisWA\BackBundle\Entity\Product'
//        ));
//    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Troiswa\BackBundle\Entity\Product'
        ));
    }




    /**
     * @return string
     */
    public function getName()
    {
        return 'troiswa_backbundle_product';
    }
}
