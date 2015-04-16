<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class PhoneType
{
    use \BlackBoxCode\Pando\Bundle\ContactInfoBundle\Model\PhoneTypeTrait;
}
