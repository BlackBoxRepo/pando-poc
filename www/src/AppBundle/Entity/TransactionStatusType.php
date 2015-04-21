<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class TransactionStatusType implements \BlackBoxCode\Pando\Bundle\ProductSaleBundle\Model\TransactionStatusTypeInterface
{
    use \BlackBoxCode\Pando\Bundle\ProductSaleBundle\Model\TransactionStatusTypeTrait;
}
