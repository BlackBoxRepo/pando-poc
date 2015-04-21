<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class AddressType implements \BlackBoxCode\Pando\Bundle\ContactInfoBundle\Model\AddressTypeInterface
{
    use \BlackBoxCode\Pando\Bundle\ContactInfoBundle\Model\AddressTypeTrait;
}
