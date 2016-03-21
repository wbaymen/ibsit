<?php

namespace AppBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\EntityManager;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\FormInterface;

class QuestionnaireType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {


       $builder -> add('name','text')
                -> add('description','textarea',array('required'=>false))
                -> add('language', 'entity', array(
                'class' => 'AppBundle:Language',
                'empty_value' => '',
                ))
                -> add('type','text')
                -> add('isgenerated', 'checkbox', array(
                    'attr'     => array('checked'   => 'checked'),
                ))
                -> add('welcomemessage','textarea',array('required'=>false))
                -> add('confirmationSms','textarea',array('required'=>false))
                -> add('finalMessage','textarea',array('required'=>false));

       $builder -> add('submit', 'submit');
       $builder -> add('reset', 'reset');

    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Questionnaire',
            'cascade_validation' => true
        ));
    }

    public function getName()
    {
        return 'Questionnaire';
    }

}
