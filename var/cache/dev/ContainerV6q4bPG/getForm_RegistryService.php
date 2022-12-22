<?php

namespace ContainerV6q4bPG;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getForm_RegistryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'form.registry' shared service.
     *
     * @return \Symfony\Component\Form\FormRegistry
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormRegistryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormRegistry.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormExtensionInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/Extension/DependencyInjection/DependencyInjectionExtension.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/ResolvedFormTypeFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/ResolvedFormTypeFactory.php';

        return $container->privates['form.registry'] = new \Symfony\Component\Form\FormRegistry([0 => new \Symfony\Component\Form\Extension\DependencyInjection\DependencyInjectionExtension(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Form\\Booking1Type' => ['privates', 'App\\Form\\Booking1Type', 'getBooking1TypeService', true],
            'App\\Form\\BookingType' => ['privates', 'App\\Form\\BookingType', 'getBookingTypeService', true],
            'App\\Form\\CategoryType' => ['privates', 'App\\Form\\CategoryType', 'getCategoryTypeService', true],
            'App\\Form\\FoodType' => ['privates', 'App\\Form\\FoodType', 'getFoodTypeService', true],
            'App\\Form\\Order1Type' => ['privates', 'App\\Form\\Order1Type', 'getOrder1TypeService', true],
            'App\\Form\\OrderType' => ['privates', 'App\\Form\\OrderType', 'getOrderTypeService', true],
            'App\\Form\\RegistrationFormType' => ['privates', 'App\\Form\\RegistrationFormType', 'getRegistrationFormTypeService', true],
            'App\\Form\\RestaurantType' => ['privates', 'App\\Form\\RestaurantType', 'getRestaurantTypeService', true],
            'App\\Form\\UserType' => ['privates', 'App\\Form\\UserType', 'getUserTypeService', true],
            'Symfony\\Bridge\\Doctrine\\Form\\Type\\EntityType' => ['privates', 'form.type.entity', 'getForm_Type_EntityService', true],
            'Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType' => ['privates', 'form.type.choice', 'getForm_Type_ChoiceService', true],
            'Symfony\\Component\\Form\\Extension\\Core\\Type\\ColorType' => ['privates', 'form.type.color', 'getForm_Type_ColorService', true],
            'Symfony\\Component\\Form\\Extension\\Core\\Type\\FileType' => ['services', '.container.private.form.type.file', 'get_Container_Private_Form_Type_FileService', true],
            'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType' => ['privates', 'form.type.form', 'getForm_Type_FormService', true],
            'Vich\\UploaderBundle\\Form\\Type\\VichFileType' => ['services', 'vich_uploader.form.type.file', 'getVichUploader_Form_Type_FileService', true],
            'Vich\\UploaderBundle\\Form\\Type\\VichImageType' => ['services', 'vich_uploader.form.type.image', 'getVichUploader_Form_Type_ImageService', true],
        ], [
            'App\\Form\\Booking1Type' => '?',
            'App\\Form\\BookingType' => '?',
            'App\\Form\\CategoryType' => '?',
            'App\\Form\\FoodType' => '?',
            'App\\Form\\Order1Type' => '?',
            'App\\Form\\OrderType' => '?',
            'App\\Form\\RegistrationFormType' => '?',
            'App\\Form\\RestaurantType' => '?',
            'App\\Form\\UserType' => '?',
            'Symfony\\Bridge\\Doctrine\\Form\\Type\\EntityType' => '?',
            'Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType' => '?',
            'Symfony\\Component\\Form\\Extension\\Core\\Type\\ColorType' => '?',
            'Symfony\\Component\\Form\\Extension\\Core\\Type\\FileType' => '?',
            'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType' => '?',
            'Vich\\UploaderBundle\\Form\\Type\\VichFileType' => '?',
            'Vich\\UploaderBundle\\Form\\Type\\VichImageType' => '?',
        ]), ['Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType' => new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['form.type_extension.form.transformation_failure_handling'] ?? ($container->privates['form.type_extension.form.transformation_failure_handling'] = new \Symfony\Component\Form\Extension\Core\Type\TransformationFailureExtension(NULL)));
            yield 1 => ($container->privates['form.type_extension.form.http_foundation'] ?? $container->load('getForm_TypeExtension_Form_HttpFoundationService'));
            yield 2 => ($container->privates['form.type_extension.form.validator'] ?? $container->load('getForm_TypeExtension_Form_ValidatorService'));
            yield 3 => ($container->privates['form.type_extension.csrf'] ?? $container->load('getForm_TypeExtension_CsrfService'));
        }, 4), 'Symfony\\Component\\Form\\Extension\\Core\\Type\\RepeatedType' => new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['form.type_extension.repeated.validator'] ?? ($container->privates['form.type_extension.repeated.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\RepeatedTypeValidatorExtension()));
        }, 1), 'Symfony\\Component\\Form\\Extension\\Core\\Type\\SubmitType' => new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['form.type_extension.submit.validator'] ?? ($container->privates['form.type_extension.submit.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\SubmitTypeValidatorExtension()));
        }, 1)], new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['form.type_guesser.validator'] ?? $container->load('getForm_TypeGuesser_ValidatorService'));
            yield 1 => ($container->privates['form.type_guesser.doctrine'] ?? $container->load('getForm_TypeGuesser_DoctrineService'));
        }, 2))], new \Symfony\Component\Form\ResolvedFormTypeFactory());
    }
}
