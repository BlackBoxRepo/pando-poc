<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class RegionZoneTaxCategoryRate
{
    use \BlackBoxCode\Pando\Bundle\TaxBundle\Model\RegionZoneTaxCategoryRateTrait;
}
