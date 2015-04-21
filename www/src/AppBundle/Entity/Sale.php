<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Sale implements \BlackBoxCode\Pando\Bundle\ProductSaleBundle\Model\SaleInterface
{
    use \BlackBoxCode\Pando\Bundle\ProductSaleBundle\Model\SaleTrait;
}
