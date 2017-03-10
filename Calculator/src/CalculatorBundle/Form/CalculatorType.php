<?php

namespace CalculatorBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CalculatorType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('leftOperand', TextType::class)
            ->add('middleOperand', TextType::class)
            ->add('rightOperand', TextType::class)
            ->add('firstOperator', TextType::class)
            ->add('secondOperator', TextType::class);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'CalculatorBundle\Entity\Calculator',
        ));
    }

    public function getName()
    {
        return 'soft_uni_blog_bundle_calculator_type';
    }
}
