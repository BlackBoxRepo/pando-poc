<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class SaleItem implements \BlackBoxCode\Pando\Bundle\ProductSaleBundle\Model\SaleItemInterface
{
    use \BlackBoxCode\Pando\Bundle\ProductSaleBundle\Model\SaleItemTrait;
}
