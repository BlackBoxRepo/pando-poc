<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Transaction
{
    use \BlackBoxCode\Pando\Bundle\ProductSaleBundle\Model\TransactionTrait;
}
