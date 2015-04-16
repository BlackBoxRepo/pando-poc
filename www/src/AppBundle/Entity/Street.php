<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Street
{
    use \BlackBoxCode\Pando\Bundle\ContactInfoBundle\Model\StreetTrait;
}
