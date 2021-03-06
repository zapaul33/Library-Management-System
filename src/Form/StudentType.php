<?php

namespace App\Form;

use App\Entity\Student;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class StudentType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('studentNo')
            ->add('LastName')
            ->add('FirstName')
            ->add('MiddleName')
            ->add('EducationalLevel')
            ->add('Course')
            ->add('YearSection')
            ->add('ContactNo')
            ->add('EmailAddress')
            ->add('verified')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Student::class,
        ]);
    }
}
