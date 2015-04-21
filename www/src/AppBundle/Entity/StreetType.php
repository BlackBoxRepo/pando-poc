<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class StreetType implements \BlackBoxCode\Pando\Bundle\ContactInfoBundle\Model\StreetTypeInterface
{
    use \BlackBoxCode\Pando\Bundle\ContactInfoBundle\Model\StreetTypeTrait;
}
