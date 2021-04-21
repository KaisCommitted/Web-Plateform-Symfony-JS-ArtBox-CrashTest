<?php

namespace Container0xYFKXN;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getConsole_Command_FormDebugService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'console.command.form_debug' shared service.
     *
     * @return \Symfony\Component\Form\Command\DebugCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'DebugCommand.php';

        $container->privates['console.command.form_debug'] = $instance = new \Symfony\Component\Form\Command\DebugCommand(($container->privates['form.registry'] ?? $container->load('getForm_RegistryService')), [0 => 'Symfony\\Component\\Form\\Extension\\Core\\Type', 1 => 'App\\Form', 2 => 'Symfony\\Bridge\\Doctrine\\Form\\Type', 3 => ''], [0 => 'App\\Form\\AnnonceType', 1 => 'App\\Form\\CandidatureType', 2 => 'App\\Form\\CategorieType', 3 => 'App\\Form\\CommentEventType', 4 => 'App\\Form\\CommentsType', 5 => 'App\\Form\\EvenementType', 6 => 'App\\Form\\FeedbackType', 7 => 'App\\Form\\InteractionsType', 8 => 'App\\Form\\LabelType', 9 => 'App\\Form\\PartenaireType', 10 => 'App\\Form\\ParticipantType', 11 => 'App\\Form\\PostesType', 12 => 'App\\Form\\RatingEventType', 13 => 'App\\Form\\RegistrationFormType', 14 => 'App\\Form\\SignalisationType', 15 => 'App\\Form\\TypeEventType', 16 => 'App\\Form\\UserType', 17 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType', 18 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType', 19 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FileType', 20 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\ColorType', 21 => 'Symfony\\Bridge\\Doctrine\\Form\\Type\\EntityType', 22 => 'Gregwar\\CaptchaBundle\\Type\\CaptchaType'], [0 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\TransformationFailureExtension', 1 => 'Symfony\\Component\\Form\\Extension\\HttpFoundation\\Type\\FormTypeHttpFoundationExtension', 2 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\FormTypeValidatorExtension', 3 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\RepeatedTypeValidatorExtension', 4 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\SubmitTypeValidatorExtension', 5 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\UploadValidatorExtension', 6 => 'Symfony\\Component\\Form\\Extension\\Csrf\\Type\\FormTypeCsrfExtension', 7 => 'Symfony\\Component\\Form\\Extension\\DataCollector\\Type\\DataCollectorTypeExtension'], [0 => 'Symfony\\Component\\Form\\Extension\\Validator\\ValidatorTypeGuesser', 1 => 'Symfony\\Bridge\\Doctrine\\Form\\DoctrineOrmTypeGuesser'], ($container->privates['debug.file_link_formatter'] ?? $container->getDebug_FileLinkFormatterService()));

        $instance->setName('debug:form');

        return $instance;
    }
}
