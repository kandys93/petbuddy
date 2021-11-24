<?php

namespace App\Form;

use App\Entity\ContactMessage;
use App\Entity\Announces;
use App\Entity\Users;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ContactMessageType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('users', EntityType::class, [
                'class'=>Users::class,
                'choice_label' => 'id',
                'mapped' => false
            ])
            ->add('message', TextareaType::class)
            //->add('contactAt')
            ->add( 'animalType', ChoiceType::class, [
            'choices' => [
                'Chien' => 'Dog',
                'Chat' => 'Cat',
                'Oiseau' => 'Bird'
            ],
        ])
            ->add('announces', EntityType::class, [
            'class' => Announces::class,
            'choice_label' => 'id'
            //'mapped' => false
            
            
        ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => ContactMessage::class,
        ]);
    }
}
