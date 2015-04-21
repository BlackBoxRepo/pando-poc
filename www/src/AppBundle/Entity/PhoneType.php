<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class PhoneType implements \BlackBoxCode\Pando\Bundle\ContactInfoBundle\Model\PhoneTypeInterface
{
    use \BlackBoxCode\Pando\Bundle\ContactInfoBundle\Model\PhoneTypeTrait;
}
