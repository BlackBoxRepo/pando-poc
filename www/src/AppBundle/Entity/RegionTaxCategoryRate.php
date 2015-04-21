<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(uniqueConstraints={@ORM\UniqueConstraint(columns={"region_id", "category_id"})})
 */
class RegionTaxCategoryRate implements \BlackBoxCode\Pando\Bundle\TaxBundle\Model\RegionTaxCategoryRateInterface
{
    use \BlackBoxCode\Pando\Bundle\TaxBundle\Model\RegionTaxCategoryRateTrait;
}
