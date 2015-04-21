<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class RegionZoneTaxCategoryRate implements \BlackBoxCode\Pando\Bundle\TaxBundle\Model\RegionZoneTaxCategoryRateInterface
{
    use \BlackBoxCode\Pando\Bundle\TaxBundle\Model\RegionZoneTaxCategoryRateTrait;
}
