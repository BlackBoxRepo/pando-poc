<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class ProductPrice implements \BlackBoxCode\Pando\Bundle\ProductSaleBundle\Model\ProductPriceInterface
{
    use \BlackBoxCode\Pando\Bundle\ProductSaleBundle\Model\ProductPriceTrait;
}
