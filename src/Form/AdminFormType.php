<?php

namespace App\Form;

use App\Repository\FormRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;

class AdminFormType extends AbstractType {

    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $builder

        ->add('title', null, [
            'label' => 'Tire de l\'article'
        ])

        ->add('description', null, [
            'label' => 'Contenu de l\'article'
        ])

        ->add('createdAt', DateTimeType::class, [
            'label' => 'Crée le :'
        ])
        
        ->add('schema', null,[
            'label' => 'Question',
        ] )

        ->add('submit', SubmitType::class, [
            'label' => 'Envoyé'
        ]);
    }

   




}