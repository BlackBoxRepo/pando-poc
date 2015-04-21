<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\HasLifecycleCallbacks
 */
class Region implements
    \BlackBoxCode\Pando\Bundle\ContactInfoBundle\Model\RegionInterface,
    \BlackBoxCode\Pando\Bundle\ProductSaleBundle\Model\RegionInterface,
    \BlackBoxCode\Pando\Bundle\TaxBundle\Model\RegionInterface
{
    use \BlackBoxCode\Pando\Bundle\ContactInfoBundle\Model\RegionTrait;
    use \BlackBoxCode\Pando\Bundle\ProductSaleBundle\Model\RegionTrait;
    use \BlackBoxCode\Pando\Bundle\TaxBundle\Model\RegionTrait;
}
