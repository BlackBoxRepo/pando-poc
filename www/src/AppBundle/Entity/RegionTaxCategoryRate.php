<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class RegionTaxCategoryRate implements \BlackBoxCode\Pando\Bundle\TaxBundle\Model\RegionTaxCategoryRateInterface
{
    use \BlackBoxCode\Pando\Bundle\TaxBundle\Model\RegionTaxCategoryRateTrait;
}
