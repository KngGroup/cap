<?php

namespace Sibers\ContactBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Sibers\ContactBundle\Entity\Contact;

/**
 * Description of LoadContacts
 *
 * @author bykov
 */
class LoadContacts implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $brian = new Contact();
        $brian->setFirstname('Brian')
              ->setLastname("O'Conner")
              ->setPhone('+19008005040');
        
        $manager->persist($brian);
        
        $dominic = new Contact();
        $dominic->setFirstname('Dominic')
                ->setLastname('Toretto')
                ->setPhone('+19008001012');
                
        $manager->persist($dominic);
        $manager->flush();
    }

}
