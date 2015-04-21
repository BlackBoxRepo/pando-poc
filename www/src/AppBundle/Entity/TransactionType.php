<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class TransactionType implements \BlackBoxCode\Pando\Bundle\ProductSaleBundle\Model\TransactionTypeInterface
{
    use \BlackBoxCode\Pando\Bundle\ProductSaleBundle\Model\TransactionTypeTrait;
}
