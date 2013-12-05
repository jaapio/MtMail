<?php

namespace MtMail\Factory;

use MtMail\Service\Mail;
use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

class MailServiceFactory implements FactoryInterface
{

    /**
     * Create service
     *
     * @param ServiceLocatorInterface $serviceLocator
     * @return Mail
     */
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        $service = new Mail(
            $serviceLocator->get('MtMail\Service\MailComposer'),
            $serviceLocator->get('MtMail\Service\MailSender')
        );
        return $service;
    }
}