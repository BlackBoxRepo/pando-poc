<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class ProductPriceType implements \BlackBoxCode\Pando\Bundle\ProductSaleBundle\Model\ProductPriceTypeInterface
{
    use \BlackBoxCode\Pando\Bundle\ProductSaleBundle\Model\ProductPriceTypeTrait;
}
