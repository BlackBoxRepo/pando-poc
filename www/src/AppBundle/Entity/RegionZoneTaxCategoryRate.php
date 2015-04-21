<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(uniqueConstraints={@ORM\UniqueConstraint(columns={"regionZone_id", "category_id"})})
 */
class RegionZoneTaxCategoryRate implements \BlackBoxCode\Pando\Bundle\TaxBundle\Model\RegionZoneTaxCategoryRateInterface
{
    use \BlackBoxCode\Pando\Bundle\TaxBundle\Model\RegionZoneTaxCategoryRateTrait;
}
