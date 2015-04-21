<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class SaleFlowFlag implements \BlackBoxCode\Pando\Bundle\ProductSaleBundle\Model\SaleFlowFlagInterface
{
    use \BlackBoxCode\Pando\Bundle\ProductSaleBundle\Model\SaleFlowFlagTrait;
}
