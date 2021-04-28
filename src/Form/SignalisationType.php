<?php

namespace App\Form;

use App\Entity\Signalisation;
use Gregwar\CaptchaBundle\Type\CaptchaType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SignalisationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('contenuSignal')
            ->add('typeSignal')
            ->add('etatSignal')
            ->add('dateSignal')
            ->add('idPost')
            ->add('idUser')
            ->add('captcha', CaptchaType::class,array('attr' => array('class' => 'form-control'), 'label' => 'Enter Captcha Code  '));
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Signalisation::class,
        ]);
    }
}
