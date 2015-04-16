<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Address
{
    use \BlackBoxCode\Pando\Bundle\ContactInfoBundle\Model\AddressTrait;
    use \BlackBoxCode\Pando\Bundle\PersonBundle\Model\AddressTrait;
}
