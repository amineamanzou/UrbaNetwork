<?php

namespace Urbanet\CvBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class EvaluerType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('id')
            ->add('Niveau')
            ->add('CVArt')
            ->add('Competence')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Urbanet\CvBundle\Entity\Evaluer'
        ));
    }

    public function getName()
    {
        return 'urbanet_cvbundle_evaluertype';
    }
}
