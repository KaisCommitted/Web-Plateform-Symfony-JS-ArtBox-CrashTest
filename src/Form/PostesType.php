<?php

namespace App\Form;

use App\Entity\Postes;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PostesType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder

            ->add('nomPost')
            ->add('description')
            ->add('file',FileType::class ,array('attr' => array('class' => 'form-control'), 'label' => 'Choose file for your Post     '))

            ->add('albumCover')


            ->add('postType')
            ->add('categorie')
            ->add('idUser')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Postes::class,
        ]);
    }
}
