<?php

namespace TroisWA\BackBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use TroisWA\BackBundle\Form\DataTransformer\TagTransformer;
use TroisWA\BackBundle\Repository\CategoryRepository;
use TroisWA\BackBundle\Repository\TagsRepository;

class ProductType extends AbstractType
{


    private $em;

    public function __construct($em)
    {
        $this->em = $em;
  }
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
//        die(dump($this->em));
        $builder
            ->add("title","text")
            ->add("description","textarea")
            ->add("reference","text")
            ->add("quantity")
            ->add("activate","checkbox")
            ->add("price","number")
            ->add('dateCreated',"date",[
                "widget"=>"single_text"
            ])

            ->add('category', 'entity',[
                "expanded"=>true,
                'class' => 'TroisWABackBundle:Category',
                'choice_label' => 'title',
                'query_builder'=>function(CategoryRepository $er){



                    return $er->builderCategoryOrderPosition();
                }

            ])
            ->add('tags','entity', array(
                "multiple"=>true,
                'class' => 'TroisWABackBundle:Tags',
                'choice_label' => 'title',
            ))

                        ->add('brand','entity', array(
                'class' => 'TroisWABackBundle:Brand',
                'choice_label' => 'title',
            ))

            ->add("image",new ImageType());
//        On est obligé de fermer le builder pour pouvoir utiliser le tagtransformer

        $builder->add(
            $builder->create('tags','collection',array(
                'type'=>new TagsWithoutProductType(),
                'allow_add'=>true

            ))->addModelTransformer(new TagTransformer($this->em))
        );


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
