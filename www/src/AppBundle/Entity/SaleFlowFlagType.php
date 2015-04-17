<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class SaleFlowFlagType
{
    use \BlackBoxCode\Pando\Bundle\ProductSaleBundle\Model\SaleFlowFlagTypeTrait;
}
