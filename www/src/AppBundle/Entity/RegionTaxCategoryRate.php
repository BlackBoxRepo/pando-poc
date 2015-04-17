<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class RegionTaxCategoryRate
{
    use \BlackBoxCode\Pando\Bundle\TaxBundle\Model\RegionTaxCategoryRateTrait;
}
