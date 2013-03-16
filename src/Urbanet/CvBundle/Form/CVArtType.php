<?php

namespace Urbanet\CvBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class CVArtType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('Titre')
            ->add('Photo')
            /*->add('Spectacle')
            ->add('Formation')*/
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Urbanet\CvBundle\Entity\CVArt'
        ));
    }

    public function getName()
    {
        return 'urbanet_cvbundle_cvarttype';
    }
}
