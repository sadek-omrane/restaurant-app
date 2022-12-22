<?php

namespace App\Form;

use App\Entity\Category;
use App\Entity\Food;
use App\Entity\Restaurant;
use App\Repository\RestaurantRepository;
use Doctrine\ORM\EntityRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\ChoiceList\ChoiceList;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;

class FoodType extends AbstractType
{

    private $security;
    private $restaurantRepository;

    public function __construct(RestaurantRepository $repo, Security $security)
    {
        $this->security = $security;
        $this->restaurantRepository = $repo;
    }

    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', null, ['required' => true])
            ->add('price', null, ['constraints' => [
                new NotBlank([
                    'message' => 'Please enter this field',
                ]),
                new Length([
                    'min' => 0,
                    'minMessage' => 'Your password should be at least {{ limit }} characters',
                    // max length allowed by Symfony for security reasons
                    'max' => 100000,
                ]),
            ],])
            ->add('description')
            ->add('image', FileType::class, array('data_class' => null, 'required' => false))
            ->add('category', EntityType::class, [
                'required' => true,
                'class' => Category::class,
                'query_builder' => function (EntityRepository $er) {

                    return $er->createQueryBuilder('c')->where('c.restaurant =' . $this->security->getUser()->getRestaurant()->getId());
                },
                /*'class' => Category::class,
            'query_builder' => function (EntityRepository $er) {
                return $er->createQueryBuilder('c')->where('category_id in (select category_id from category where restaurant_id =');
            },*/
            ])


            ->add('restaurant', null, ['required' => true])
            ->add('isFeatured', null, [])
            ->add('isPromoted', null, [])
            ->add('promotion', IntegerType::class, array());
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Food::class,
        ]);
    }
}
