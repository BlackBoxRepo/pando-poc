<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class RegionZone implements
    \BlackBoxCode\Pando\Bundle\ContactInfoBundle\Model\RegionZoneInterface,
    \BlackBoxCode\Pando\Bundle\ProductSaleBundle\Model\RegionZoneInterface,
    \BlackBoxCode\Pando\Bundle\TaxBundle\Model\RegionZoneInterface
{
    use \BlackBoxCode\Pando\Bundle\ContactInfoBundle\Model\RegionZoneTrait;
    use \BlackBoxCode\Pando\Bundle\ProductSaleBundle\Model\RegionZoneTrait;
    use \BlackBoxCode\Pando\Bundle\TaxBundle\Model\RegionZoneTrait;
}
