<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class TransactionType
{
    use \BlackBoxCode\Pando\Bundle\ProductSaleBundle\Model\TransactionTypeTrait;
}
