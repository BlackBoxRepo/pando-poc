<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Transaction implements \BlackBoxCode\Pando\Bundle\ProductSaleBundle\Model\TransactionInterface
{
    use \BlackBoxCode\Pando\Bundle\ProductSaleBundle\Model\TransactionTrait;
}
