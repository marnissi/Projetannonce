<?php

namespace Annonce\AnnonceBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class DetailAnnonceType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titre')
            ->add('entreprise')
            ->add('adresseEntrprise')
            ->add('experience')
            ->add('status')
            ->add('phone')
            ->add('description')
            ->add('categorie')
            ->add('souscategorie')
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Annonce\AnnonceBundle\Entity\DetailAnnonce'
        ));
    }
}
