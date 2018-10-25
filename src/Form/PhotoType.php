<?php
/**
 * Created by PhpStorm.
 * User: Valery Maslov
 * Date: 17.08.2018
 * Time: 10:57.
 */

namespace App\Form;

use App\Entity\Photo;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

final class PhotoType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('photo', FileType::class, ['label' => 'label.photo'])
            ->add('priority', null, [
                'attr' => [
                    'class' => 'form-control',
                    'value' => '0',
                ],
                'label' => 'label.priority',
            ]);
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Photo::class,
        ]);
    }
}
