<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Region
{
    use \BlackBoxCode\Pando\Bundle\ContactInfoBundle\Model\RegionTrait;
    use \BlackBoxCode\Pando\Bundle\ProductSaleBundle\Model\RegionTrait;
    use \BlackBoxCode\Pando\Bundle\TaxBundle\Model\RegionTrait;
}
