<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class ProductVariantInventory implements \BlackBoxCode\Pando\Bundle\ProductSaleBundle\Model\ProductVariantInventoryInterface
{
    use \BlackBoxCode\Pando\Bundle\ProductSaleBundle\Model\ProductVariantInventoryTrait;
}
