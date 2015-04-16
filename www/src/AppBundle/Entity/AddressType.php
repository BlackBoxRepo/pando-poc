<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class AddressType
{
    use \BlackBoxCode\Pando\Bundle\ContactInfoBundle\Model\AddressTypeTrait;
}
