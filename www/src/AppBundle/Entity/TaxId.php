<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class TaxId implements
    \BlackBoxCode\Pando\Bundle\ContactInfoBundle\Model\TaxIdInterface,
    \BlackBoxCode\Pando\Bundle\PersonBundle\Model\TaxIdInterface
{
    use \BlackBoxCode\Pando\Bundle\ContactInfoBundle\Model\TaxIdTrait;
    use \BlackBoxCode\Pando\Bundle\PersonBundle\Model\TaxIdTrait;
}
