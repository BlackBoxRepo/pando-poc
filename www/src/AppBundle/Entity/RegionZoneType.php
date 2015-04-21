<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class RegionZoneType implements \BlackBoxCode\Pando\Bundle\ContactInfoBundle\Model\RegionZoneTypeInterface
{
    use \BlackBoxCode\Pando\Bundle\ContactInfoBundle\Model\RegionZoneTypeTrait;
}
