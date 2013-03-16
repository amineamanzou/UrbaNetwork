<?php

namespace Urbanet\CvBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class SpectacleType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('Type')
            ->add('Libelle')
            ->add('Date')
            ->add('Lieu')
            ->add('Nbr')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Urbanet\CvBundle\Entity\Spectacle'
        ));
    }

    public function getName()
    {
        return 'urbanet_cvbundle_spectacletype';
    }
}
