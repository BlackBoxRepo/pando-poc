<?php
namespace AppBundle\Entity;

use BlackBoxCode\Pando\Bundle\ProductSaleBundle\Model\TransactionPathResultInterface;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class ProductProvider implements
    TransactionPathResultInterface,
    \BlackBoxCode\Pando\Bundle\ProductProviderBundle\Model\ProductProviderInterface
{
    use \BlackBoxCode\Pando\Bundle\ProductProviderBundle\Model\ProductProviderTrait;
}
