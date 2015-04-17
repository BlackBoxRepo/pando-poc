<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class SaleFlowFlag
{
    use \BlackBoxCode\Pando\Bundle\ProductSaleBundle\Model\SaleFlowFlagTrait;
}
