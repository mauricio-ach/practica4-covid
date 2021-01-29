<?php

namespace App\Form;

use App\Entity\Contacto;
use Doctrine\DBAL\Types\IntegerType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ContactoType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombre')
            ->add('edad')
            ->add('sexo', ChoiceType::class,[
                'choices' => [
                    'Femenino' => 'Femenino',
                    'Masculino' => 'Masculino',
                ]
            ])
            ->add('p_contagio', null, ['attr' => ['value' => 0]])
            ->add('p_contacto', null, ['attr' => ['value' => 0]])
            ->add('Registrar', SubmitType::class, [
                'attr' => ['class' => 'btn btn-sm btn-primary pull-right']
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Contacto::class,
        ]);
    }
}
