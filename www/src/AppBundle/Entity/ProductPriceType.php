<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class ProductPriceType
{
    use \BlackBoxCode\Pando\Bundle\ProductSaleBundle\Model\ProductPriceTypeTrait;
}
