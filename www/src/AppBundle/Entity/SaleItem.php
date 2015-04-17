<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class SaleItem
{
    use \BlackBoxCode\Pando\Bundle\ProductSaleBundle\Model\SaleItemTrait;
}
