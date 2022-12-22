<?php

namespace App\Form;

use App\Entity\Booking;
use Doctrine\DBAL\Types\BooleanType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class Booking1Type extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('stat', null, ['label' => 'Validat'])
            ->add('nbPerson', null, ['required' => true])
            ->add('restaurant', null, ['required' => true])
            ->add('bookingAt')
            ->add('owner', null, ['required' => true]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Booking::class,
        ]);
    }
}
