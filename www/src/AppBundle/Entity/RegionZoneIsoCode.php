<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class RegionZoneIsoCode
{
    use \BlackBoxCode\Pando\Bundle\ContactInfoBundle\Model\RegionZoneIsoCodeTrait;
}
