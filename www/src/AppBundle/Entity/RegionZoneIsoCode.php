<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class RegionZoneIsoCode implements \BlackBoxCode\Pando\Bundle\ContactInfoBundle\Model\RegionZoneIsoCodeInterface
{
    use \BlackBoxCode\Pando\Bundle\ContactInfoBundle\Model\RegionZoneIsoCodeTrait;
}
