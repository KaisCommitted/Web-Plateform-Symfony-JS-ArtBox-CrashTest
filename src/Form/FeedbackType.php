<?php

namespace App\Form;

use App\Entity\Feedback;
use Gregwar\CaptchaBundle\Type\CaptchaType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class FeedbackType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('contenuFeedback')
            ->add('typeFeedback')
            ->add('etatFeedback')
            ->add('dateFeedback')
            ->add('idUser')
            ->add('captcha', CaptchaType::class,array('attr' => array('class' => 'form-control'), 'label' => 'Enter Captcha Code  '));
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Feedback::class,
        ]);
    }
}
