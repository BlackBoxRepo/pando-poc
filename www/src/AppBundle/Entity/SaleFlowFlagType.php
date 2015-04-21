<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class SaleFlowFlagType implements \BlackBoxCode\Pando\Bundle\ProductSaleBundle\Model\SaleFlowFlagTypeInterface
{
    use \BlackBoxCode\Pando\Bundle\ProductSaleBundle\Model\SaleFlowFlagTypeTrait;
}
