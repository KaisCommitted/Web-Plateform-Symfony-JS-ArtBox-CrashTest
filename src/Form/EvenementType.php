<?php

namespace App\Form;

use App\Entity\Evenement;
use Symfony\Component\DomCrawler\Field\TextareaFormField;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Gregwar\CaptchaBundle\Type\CaptchaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\BirthdayType;
use Symfony\Component\Form\Extension\Core\Type\LocaleType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

use Symfony\Component\Form\Extension\Core\Type\FormType;




class EvenementType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('date', DateType::class ,array('attr' => array('class' => 'form-control')))
            ->add('nomEvent', TextType::class ,array('attr' => array('class' => 'form-control')))
            ->add('description', TextareaType::class ,array('attr' => array('class' => 'form-control')))
            ->add('nbMax', IntegerType::class ,array('attr' => array('class' => 'form-control'), 'label' => 'Event capacity '))

            ->add('locationEvent',TextType::class ,array('attr' => array('class' => 'form-control')))

            ->add('categorie',  null ,array('attr' => array('class' => 'form-control')))
            ->add('typeEvent',  null ,array('attr' => array('class' => 'form-control')))
            ->add('idOrg',  null ,array('attr' => array('class' => 'form-control')))
            ->add('File',FileType::class ,array('attr' => array('class' => 'form-control'), 'label' => 'Choose an Image for your Event      '))
            ->add('captcha', CaptchaType::class,array('attr' => array('class' => 'form-control'), 'label' => 'Enter Captcha Code  '));

        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Evenement::class,
        ]);
    }
}
