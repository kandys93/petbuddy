<?php

namespace App\Form;

use App\Entity\Announces;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AnnouncesType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title', TextType::class)
            ->add('content', TextareaType::class)
            ->add('animalType', ChoiceType::class, [
                'choices' => [
                    'Chien' => 'Dog',
                    'Chat' => 'Cat',
                    'Oiseau' => 'Bird'
                ],
            ])
            ->add('weight', ChoiceType::class, [
                'choices' => [
                    '0-7' => 'Petit',
                    '7-18' => 'Moyen',
                    '18-45' => 'Grand'
                ],
            ])
            ->add('imageProfil', FileType::class, [
                'data_class' => null
            ])
            ->add('city', TextType::class)
            ->add('zipCode', IntegerType::class)
            ->add('price', IntegerType::class)
            //->add('creationAt')
            //->add('updateAt')
            ->add('availabilityDate', DateType::class)
            //->add('users')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Announces::class,
        ]);
    }
}
