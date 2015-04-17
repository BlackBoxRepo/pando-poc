<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class TransactionStatusType
{
    use \BlackBoxCode\Pando\Bundle\ProductSaleBundle\Model\TransactionStatusTypeTrait;
}
