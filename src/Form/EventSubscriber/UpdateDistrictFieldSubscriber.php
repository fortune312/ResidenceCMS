<?php

declare(strict_types=1);

namespace App\Form\EventSubscriber;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;

class UpdateDistrictFieldSubscriber implements EventSubscriberInterface
{
    public static function getSubscribedEvents()
    {
        return [FormEvents::POST_SUBMIT => 'onCityChanged'];
    }

    public function onCityChanged(FormEvent $event)
    {
        $form = $event->getForm();

        if ($form->getData()) {
            // District of the city
            $districts = $form->getData()->getDistricts();

            $form->getParent()->add('district', EntityType::class, [
                'class' => 'App\Entity\District',
                'placeholder' => 'placeholder.select_district',
                'choice_label' => 'name',
                'attr' => [
                    'class' => 'form-control',
                ],
                'required' => false,
                'label' => 'label.district',
                'choices' => $districts,
            ]);
        }
    }
}
