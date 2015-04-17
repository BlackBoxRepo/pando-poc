<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class ProductPrice
{
    use \BlackBoxCode\Pando\Bundle\ProductSaleBundle\Model\ProductPriceTrait;
}
