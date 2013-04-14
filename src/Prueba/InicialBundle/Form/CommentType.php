<?php

namespace Prueba\InicialBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class CommentType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('user')
            ->add('comment')
            ->add('approved')
            ->add('created')
            ->add('updated')
            ->add('blog')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Prueba\InicialBundle\Entity\Comment'
        ));
    }

    public function getName()
    {
        return 'prueba_inicialbundle_commenttype';
    }
}
